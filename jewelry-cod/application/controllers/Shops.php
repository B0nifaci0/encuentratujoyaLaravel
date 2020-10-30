<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shops extends CI_Controller {

	private $contextual_data;
// esta funcion sirve para delcrar la imagen
	private $image_config = array(
						'upload_path'   => './assets/images/shops',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size'      => 500,
						'max_width'     => 3000,
						'max_height'    => 3000
					);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Shop');
		$this->load->library('ftp');
		$this->contextual_data = array(
			'controller_name' => $this->uri->segment(1),
			'method' => $this->uri->segment(2)
		);
	}

	public function index()
	{
		$id_user = $this->session->userdata('logged_in')['id_user'];
		$data['shops'] = array();
		array_push($data['shops'], $this->Shop->getShopByIdUser($id_user));
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('shops/index', $data);
		$this->load->view('layouts/dashboard_food');
	}

	public function add()
	{
		if ($_POST) {
      if ($this->form_validation->run() === TRUE) {
				$this->load->library('upload', $this->image_config);
				if (!$this->upload->do_upload('image')) {
					$error = array('error' => 'No se ha podido guardad a imagen ' . $this->upload->display_errors());
					$this->load->view('menu');
					$this->load->view('shops/signin', $error);
					return;
				}
				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];

				$user = $this->Shop->save($file_name);
				$this->sendVerificationEmail($user->email, $user->name, $user->id_user);
				//$this->session->set_flashdata('user', $user);
				redirect(URL . '/users/signin_success/' . $user->id_user);
			}else{
				$this->load->view('menu');
				$this->load->view('shops/signin');
			}
    }else{
			$this->load->view('menu');
			$this->load->view('shops/signin');
    }
	}

	public function show($id_shop){
		$this->load->model('Estado');
		$data['estados'] = $this->Estado->all();
		$this->load->model('Category');
		$data['categories'] = $this->Category->all();
		$this->load->model('Promotion');
		$data['promotions'] = $this->Promotion->getPromotionsByIdShop($id_shop);
		$data['shop'] = $this->Shop->find($id_shop);
		$data['shops'] = $this->Shop->all();
		$this->load->model('Product');
		$data['products'] = $this->Product->getProductsByIdShop($id_shop);
		for ($i=0; $i < count($data['products']); $i++) {
			$data['products'][$i]->shop = $this->Shop->find($data['products'][$i]->id_shop);
		}
		$this->load->model('Branch');
		$id_branch =
		$data['branch'] = $this->Branch->getFirst($data['shop']->id_shop);
		$this->load->view('menu');
		//print_r($data['shop']);
		$this->load->view('shops/show', $data);

	}

	public function edit($id_user){
		// $id_shop = $this->Shop->getShopByIdUser($this->session->userdata('logged_in')['id_user'])->id_shop;

		if($_POST){
			if ($this->form_validation->run() === TRUE) {
				$file_name = "";
				if ($_FILES) {
					$this->load->library('upload', $this->image_config);
					if (!$this->upload->do_upload('image')) {
						$error = array('error' => 'No se ah podido guardad a imagen ' . $this->upload->display_errors());
						$this->load->view('layouts/dashboard_nav', $this->contextual_data);
						$this->load->view('shops/add', $error);
						$this->load->view('layouts/dashboard_food');
						return;
					}
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];
				}
				$this->Shop->update($file_name);
				$this->session->set_flashdata('success', 'Los datos de tu tienda han sido modificacos exitosamente');
				redirect(URL . 'productsManager/');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
	  		$this->load->view('shops/signin');
	  		$this->load->view('layouts/dashboard_food');
			}
		}else {
			$data['shop'] = $this->Shop->getShopByIdUser($id_user);
			$this->load->model('User');
			$data['user'] = $this->User->find($data['shop']->id_user);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('shops/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function changeImage($id_shop)
	{
			if ($_FILES) {
				$this->load->library('ftp');

				$this->load->library('upload', $this->image_config);

				if (!$this->upload->do_upload('image')) {
					$error = array('error' => 'No se ha podido guardad a imagen ' . $this->upload->display_errors());
					$this->load->view('layouts/dashboard_nav', $this->contextual_data);
					$this->load->view('products_manager/edit', $error);
					$this->load->view('layouts/dashboard_food');
					return;
				}

				$upload_data = $this->upload->data();
				$image_name = $upload_data['file_name'];
				// Obtenemos el modelo de Imagenes
				$this->Shop->updateImage($image_name);
				$this->session->set_flashdata('success', 'La imagen de tu tienda se ha actualizado correctamente');
				redirect(URL . 'shops');
			}
	}

	public function search()
	{
		$param = $_REQUEST['param'];
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$data['shops'] = $this->Shop->search($param);
		$this->load->view('shops/index', $data);
		$this->load->view('layouts/dashboard_food', $data);
	}

	private function sendVerificationEmail($email, $name, $id_user)
	{
		$this->load->library('email');

		$config['protocol']     = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'al221410264@gmail.com';
		$config['smtp_pass']    = 'JorgeUTVT777';
		$config['charset']      = 'utf-8';
		$config['newline']      = "\r\n";
		$config['mailtype']     = 'html';
		$config['validation']   = TRUE;

		$this->email->initialize($config);

		$this->email->from('la221410264@gmail.com', 'Jewelry Palace');
		$this->email->to($email);
		$this->email->subject('Verificación de cuenta');
		$this->email->message("Hola $name da click <a href='http://www.jewelrypalace.site/users/verify_account/$id_user'>aqui</a> para verificar tu cuenta.");

		if($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			return false;
		}
	}

	// Pantalla de registro exitoso
	public function signin_success($id_user)
	{
		$this->load->model('User');
		$data['user'] = $this->User->find($id_user);
		$this->load->view('menu.php');
		$this->load->view('users/signin_success', $data);
		$this->load->view('piepag.php');
	}

	public function signin()
	{
		$this->load->model('Estado');
		$data['estados'] = $this->Estado->all();

		$this->load->view('layouts/nav');
		$this->load->view('shops/signin', $data);

	}

	public function delete($id_shop){
		$this->Shop->destroy($id_shop);
		return;
	}

}
?>
