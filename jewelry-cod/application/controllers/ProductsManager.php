<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsManager extends CI_Controller {

	private $contextual_data;
//validacion de l imagen
	private $image_config = array(
						'upload_path'   => './assets/images/productos',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size'      => 25000000,
						'max_width'     => 2048000,
						'max_height'    => 2048000
					);

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') == null){
		  $this->session->set_flashdata('error', 'Inicia sesión para continuar');
		  redirect(URL . 'users/login');
		}
		$this->load->model('Product');
		// Ayuda al buscador contextual a saber que controlador se esta ejecutando
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

	public function index()
	{
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$id_user = $this->session->userdata('logged_in')['id_user'];
		$data['products'] = $this->Product->getProductsByIdUser($id_user);
		$this->load->view('products_manager/index', $data);
		$this->load->view('layouts/dashboard_food');
	}
//funcion para agregar la iamgen
	public function add()
	{
		if ($_POST) {
			//libreria de validacion en tu caso debes de quitar esta libreria  solo necesitas la del ftp
			if ($this->form_validation->run() === TRUE) {
				$this->load->library('ftp');

				$this->load->library('upload', $this->image_config);
//aqui cargas la iamgen de la libreria guardas la imagen
				if (!$this->upload->do_upload('image')) {
					$error = array('error' => 'No se ha podido guardad a imagen ' . $this->upload->display_errors());
					$this->load->view('layouts/dashboard_nav', $this->contextual_data);
					$this->load->view('products_manager/add', $error);
					$this->load->view('layouts/dashboard_food');
					return;
				}

				$upload_data = $this->upload->data();
				$file_name = $upload_data['file_name'];

				$this->load->model('Shop');
				$id_user = $this->session->userdata('logged_in')['id_user'];
				$shop = $this->Shop->getShopByIdUser($id_user);

				$this->Product->save($file_name, $shop->id_shop);
				$this->session->set_flashdata('success', 'El producto se ha guardado correctamente');
				redirect(URL . 'productsManager');
			}else{
				$this->load->model('Category');
				$id_user = $this->session->userdata('logged_in')['id_user'];
				$data['categories'] = $this->Category->getCategoriesByIdUser($id_user);
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('products_manager/add', $data);
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			$this->load->model('Category');
			$id_user = $this->session->userdata('logged_in')['id_user'];
			$data['categories'] = $this->Category->getCategoriesByIdUser($id_user);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('products_manager/add', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function show()
	{
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('products_manager/show');
		$this->load->view('layouts/dashboard_food');
	}

	public function edit($id_product)
	{
		if ($_POST) {
			if ($this->form_validation->run() === TRUE) {
				$this->Product->update();
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('products_manager/edit');
				$this->load->view('layouts/dashboard_food');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('products_manager/edit');
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			$data['product'] = $this->Product->find($id_product);
			$this->load->model('Image');
			$data['product'][0]->images = $this->Image->getProductImagesOf($data['product'][0]->id_product);
			$this->load->model('Category');
			$data['product'][0]->categories = $this->Category->getCombo($data['product'][0]->id_category);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('products_manager/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function addImageToGallery($id_product)
	{
		if ($_POST) {
			$this->load->library('ftp');

			$this->load->library('upload', $this->image_config);

			if (!$this->upload->do_upload('image_galery')) {
				$error = array('error' => 'No se ha podido guardad a imagen ' . $this->upload->display_errors());
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('products_manager/edit', $error);
				$this->load->view('layouts/dashboard_food');
				return;
			}

			$upload_data = $this->upload->data();
			$image_name = $upload_data['file_name'];
			// Obtenemos el modelo de Imagenes
			$CI = $this->Product->getImageModel();
			$this->Image->save_product_image($image_name);
			$this->session->set_flashdata('success', 'El producto se ha guardado correctamente');
			redirect(URL . 'productsManager');
		}else{
			return;
		}
	}

	public function changeImage($id_product)
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
			$this->Product->updateImage($image_name);
			$data['products'] = $this->Product->all();
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('products_manager/index', $data);
			$this->load->view('layouts/dashboard_food');
		}else{
			echo "khe verga";
			return;
		}
	}

	public function search()
	{

		//$param = $_REQUEST['param'];
		$id_category = $_REQUEST['id_category'];
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$data['products'] = $this->Product->search($id_category);
		$this->load->view('products_manager/index', $data);
		$this->load->view('layouts/dashboard_food', $data);
	}

	public function delete($id_product)
	{
		$this->Product->destroy($id_product);
		return;
	}

}
