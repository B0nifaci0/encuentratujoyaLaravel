<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	private $contextual_data;

	private $image_config = array(
						'upload_path'   => './assets/images/users',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size'      => 250,
						'max_width'     => 1024,
						'max_height'    => 1024
					);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

	public function index()
	{
		$data['users'] = $this->User->all();
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('users/index', $data);
		$this->load->view('layouts/dashboard_food');
	}

	public function add()
	{
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('users/add');
		$this->load->view('layouts/dashboard_food');
	}

	public function show()
	{
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('shops/show');
		$this->load->view('layouts/dashboard_food');
	}

	public function search()
	{
		$param = $_REQUEST['param'];
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);

		$data['users'] = $this->User->search($param);
		$this->load->view('users/index', $data);
		$this->load->view('layouts/dashboard_food', $data);
	}

	public function edit($id_user)
	{
		if($_POST){
			if($this->form_validation->run() === TRUE){
				$this->User->update();
				$data['users'] = $this->User->all();
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('users/index', $data);
				$this->load->view('layouts/dashboard_food');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('users/edit');
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			$data['user'] = $this->User->find($id_user);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('users/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function delete($id_user)
	{
		$this->User->destroy($id_user);
		return;
	}

	public function signin()
	{
		if ($_POST) {
			if ($this->form_validation->run() === TRUE) {
			//	echo"entra";
				$data['user'] = $this->User->save();
				$user = $data['user'];
				$this->sendVerificationEmail($user->email, $user->name, $user->id_user);
				redirect('/users/signin_success/' . $user->id_user);
			}else{
			//	echo "entra1";
				$this->load->view('menu.php');
				$this->load->view('users/signin');
				$this->load->view('piepag.php');
			}
		}else{
			//echo"entra2";
			$this->load->view('menu.php');
			$this->load->view('users/signin');
			$this->load->view('piepag.php');
		}
	}

	public function login()
	{
		if ($_POST) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$result = $this->User->checkDatabase($email, $password);
			if($result){
				$session_array = array();
				foreach($result as $row){
					$session_array = array(
						'id_user' => $row->id_user,
						'username' => $row->username,
						'email' => $row->email,
						'name' => $row->name,
						'image' => $row->image
					);
					$this->session->set_userdata('logged_in', $session_array);
				}
				$this->session->set_flashdata('success', 'Bienvenid@ ' . $session_array['name']);
				redirect(URL . 'productsManager');
			}else{
				$this->session->set_flashdata('error', 'Correo o contraseña invalidos');
				redirect(URL . 'users/login');
			 }
		}else{
			$this->load->view('menu');
			$this->load->view('users/login');
			$this->load->view('piepag');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect(base_url());
	}

	public function signin_success($id_user)
	{
		$data['user'] = $this->User->find($id_user);
		$this->load->view('menu.php');
		$this->load->view('users/signin_success', $data);
		$this->load->view('piepag.php');
	}

	public function verify_account($id_user)
	{
		$this->User->check($id_user);
		$data['user'] = $this->User->find($id_user);
		$this->load->view('menu.php');
		$this->load->view('users/verification_success', $data);
		$this->load->view('piepag.php');
	}

	public function recover_password()
	{
		if ($_POST) {
			$email = $this->input->post('email');
			$user = $this->User->getUserByEmail($email);
			if ($this->sendRecoveryPasswordEmail($email, $user->name, $user->id_user)) {
				echo "Revisa tu correo elecronico. Te hemos enviado un email a tu correo $user->email,";
			}
		}else{
			$this->load->view('menu');
			$this->load->view('users/recover_password');
			$this->load->view('piepag');
		}
	}

	// Cambiar la contraseña olvidada
	public function change_password($id_users)
	{
		if ($_POST) {
			if ($this->form_validation->run() === TRUE) {
				if ($this->User->update_password()) {
					$this->session->set_flashdata('success', 'Tu contraseña ha sido actualizada exitosamente, ya no la olvides :)');
					redirect(URL . 'productsManager');
				}else{
					$this->session->set_flashdata('success', 'Algo salio mal, intentalo de nuevo :)');
					$this->load->view('menu.php');
					$this->load->view('users/change_password');
					$this->load->view('piepag.php');
				}
			}else {
				$data['user'] = $this->User->getByEncryptedId($id_users);
				$this->load->view('menu.php');
				$this->load->view('users/change_password', $data);
				$this->load->view('piepag.php');
			}
		}else{
			$data['user'] = $this->User->getByEncryptedId($id_users);
			$this->load->view('menu');
			$this->load->view('users/change_password', $data);
			$this->load->view('piepag');
		}
	}

	public function registry(){

		$this->load->view('menu');
		$this->load->view('users/registry');
	}

	public function change_image()
	{
		$this->load->library('ftp');

		$this->load->library('upload', $this->image_config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => 'No se ha podido guardad a imagen ' . $this->upload->display_errors());
			$id_user = $this->input->post('id_user');
			$data['user'] = $this->User->find($id_user);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('users/edit', $error);
			$this->load->view('layouts/dashboard_food');
			return;
		}

		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];

		$this->User->update_image($file_name);
		$session_array  = $this->session->userdata('logged_in');
		$session_array['image'] = $file_name;
		$this->session->set_userdata('logged_in', $session_array);
		redirect(URL . 'productsManager');
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

	private function sendRecoveryPasswordEmail($email, $name, $id_user)
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
		$this->email->subject('Recuperación de contraseña');
		$this->email->message("Hola $name da click <a href='http://www.jewelrypalace.site/users/change_password/" . md5($id_user) . "'>aqui</a>
			para comenzar el proceso de recuperación de contraeña de tu cuenta en jewelrypalace.site.<br><br>Si tu no solicitaste una recuperación de contraseña ignora este correo.");

		if($this->email->send()){
			echo "El email se ha mandado correctamente";
		}else{
			echo $this->email->print_debugger();
			echo "<br>Error al enviar el email";
		}
	}


}
?>
