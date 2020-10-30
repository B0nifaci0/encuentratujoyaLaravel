<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
    if ($this->session->userdata('logged_in') == null){
		  $this->session->set_flashdata('error', 'Inicia sesión para continuar');
		  redirect(URL . 'users/login');
		}
		$this->load->model('Category');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

  public function index(){
    $id_user = $this->session->userdata('logged_in')['id_user'];
    $data['categories'] = $this->Category->getCategoriesByIdUser($id_user);
    $this->load->view('layouts/dashboard_nav', $this->contextual_data);
    $this->load->view('categories/index', $data);
    $this->load->view('layouts/dashboard_food');
  }

  public function add(){
    if ($_POST) {
      if ($this->form_validation->run() === TRUE) {
        $this->load->model('Shop');
        $id_user = $this->session->userdata('logged_in')['id_user'];
        $shop = $this->Shop->getShopByIdUser($id_user);
        $this->Category->save($shop->id_shop);
        $this->session->set_flashdata('success', 'La categoria se ha actualizado correctamente');
        redirect(URL . 'categories');
      }else{
        $this->load->view('layouts/dashboard_nav', $this->contextual_data);
    		$this->load->view('categories/add');
    		$this->load->view('layouts/dashboard_food');
      }
    }else{
      $this->load->model('Shop');
      $id_user = $this->session->userdata('logged_in')['id_user'];
      $data['shop'] = $this->Shop->getShopByIdUser($id_user);
      $this->load->view('layouts/dashboard_nav', $this->contextual_data);
  		$this->load->view('categories/add');
  		$this->load->view('layouts/dashboard_food');
    }
  }

  public function edit($id_category)
  {
    if ($_POST) {
      if ($this->form_validation->run() === TRUE) {
        $this->Category->update();
        $this->session->set_flashdata('success', 'La categoria se ha actualizado correctamente');
        redirect(URL . 'categories');
      }else{
        $this->load->view('layouts/dashboard_nav', $this->contextual_data);
        $this->load->view('categories/edit', $data);
        $this->load->view('layouts/dashboard_food');
      }
    }else{
      $data['category'] = $this->Category->find($id_category);
      $this->load->view('layouts/dashboard_nav', $this->contextual_data);
      $this->load->view('categories/edit', $data);
      $this->load->view('layouts/dashboard_food');
    }
  }

  public function delete($id_category)
	{
		return $this->Category->destroy($id_category);
	}

}
?>
