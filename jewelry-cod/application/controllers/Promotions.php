<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions extends CI_Controller {

	private $contextual_data;

	private $image_config = array(
						'upload_path'   => './assets/images/productos',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size'      => 250,
						'max_width'     => 1500,
						'max_height'    => 1024
					);

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Promotion');
		// Ayuda al buscador contextual a saber que controlador se esta ejecutando
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

	public function index()
	{
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$data['promotions'] = $this->Promotion->all();
		$this->load->view('promotions/index', $data);
		$this->load->view('layouts/dashboard_food');
	}

  public function add()
  {
    if($_POST){
      if($this->form_validation->run() === TRUE){
        $this->load->library('upload',$this->image_config);

				if(!$this->upload->do_upload('image')){
          $error = array('error' => 'NO SE A PODIDO GUARDAR LA IMAGEN'. $this->upload->display_errors());
          $this->load->view('layouts/dashboard_nav', $this->contextual_data);
          $this->load->view('promotions/add', $error);
          $this->load->view('layouts/dashboard_food');
          return;
        }
        $upload_data = $this->upload->data();
        $file_image = $upload_data['file_name'];

				$this->load->model('Shop');
				$id_user = $this->session->userdata('logged_in')['id_user'];
				$shop = $this->Shop->getShopByIdUser($id_user);

        $this->Promotion->save($file_image, $shop->id_shop);
				$this->session->set_flashdata('success', 'La promocion de ha guardado correctamente');
				redirect(URL . 'promotions');
      }else{
        $this->load->view('layouts/dashboard_nav', $this->contextual_data);
	  		$this->load->view('promotions/add');
	  		$this->load->view('layouts/dashboard_food');
      }
    }else{
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
  		$this->load->view('promotions/add');
  		$this->load->view('layouts/dashboard_food');

  }
 }


 	public function edit($id_promotion){
		if($_POST){
			if($this->form_validation->run() === TRUE){
				$this->Promotion->update();
				$data['promotions'] = $this->Promotion->all();
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
	  		$this->load->view('promotions/index', $data);
	  		$this->load->view('layouts/dashboard_food');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		  	$this->load->view('promotions/edit');
		  	$this->load->view('layouts/dashboard_food');
			}
	}else{
				$data['promotion'] = $this->Promotion->find($id_promotion);
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('promotions/edit', $data);
				$this->load->view('layouts/dashboard_food');
			}
		}

	public function changeImage($id_promotion)
	{
		if($_FILES){
			$this->load->library('ftp');
			$this->load->library('upload',$this->image_config);

			if(!$this->upload->do_upload('image')){
				$error = array ('error' => 'No se a podido subir la imagen'. $this->upload->display_errors());
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('promotions/edit', $error);
				$this->load->view('layouts/dashboard_food');
				return;
			}
			$upload_data = $this->upload->data();
			$image_name = $upload_data['file_name'];
			// Obtenemos el modelo de Imagenes
			$this->Promotion->updateImage($image_name);
			$data['promotions'] = $this->Promotion->all();
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('promotions/index', $data);
			$this->load->view('layouts/dashboard_food');
		}else{
			echo "khe verga";
			return;
		}
	}

		public function delete($id_promotion)
		{
			$this->Promotion->destroy($id_promotion);
			return;
		}

}
?>
