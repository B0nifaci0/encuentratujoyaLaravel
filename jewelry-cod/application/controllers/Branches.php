<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {

	private $contextual_data;

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') == null){
		  $this->session->set_flashdata('error', 'Inicia sesión para continuar');
		  redirect(URL . 'users/login');
		}
		$this->load->model('Branch');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

  public function index()
  {
		$id_user = $this->session->userdata('logged_in')['id_user'];
    $data['branches'] = $this->Branch->getBranchesByIdUser($id_user);
    $this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('branches/index', $data);
		$this->load->view('layouts/dashboard_food');
  }

  public function add()
  {
		if ($_POST) {
			if ($this->form_validation->run() === TRUE) {
				$this->load->model('Shop');
				$id_user = $this->session->userdata('logged_in')['id_user'];
				$shop = $this->Shop->getShopByIdUser($id_user);
				$this->Branch->save($shop->id_shop);
				$this->session->set_flashdata('success', 'La sucursal se ha guardado correctamente');
				redirect(URL . 'branches');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('branches/add');
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('branches/add');
			$this->load->view('layouts/dashboard_food');
		}
  }

  public function show($id_branch)
  {
		$this->load->model('Shop');
		$this->load->model('Product');
		$this->load->model('Promotion');
		$this->load->model('Schedule');

		$data['branch'] = $this->Branch->find($id_branch);
		$data['branch']->shop = $this->Shop->find($data['branch']->id_branch);
		$data['branch']->shop->products = $this->Product->getProductsByIdShop($data['branch']->shop->id_shop);
		$data['branch']->shop->promotions = $this->Promotion->getPromotiosByIdStyle($data['branch']->shop->id_shop);
		$data['branch']->schedules = $this->Schedule->getScheduresByIdBranch($data['branch']->id_branch);
		$this->load->view('menu', $this->contextual_data);
		$this->load->view('branches/show', $data);
		$this->load->view('piepag');
  }

  public function edit($id_branch)
  {
		if ($_POST) {
			if ($this->form_validation->run() === TRUE) {
				$this->Branch->update();
				$this->session->set_flashdata('success', 'La sucursal se ha guardado correctamente');
				redirect(URL . 'branches');
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('branches/add');
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			$data['branch'] = $this->Branch->find($id_branch);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('branches/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
  }

	public function delete($id_branch)
	{
		return $this->Branch->destroy($id_branch);
	}

}
?>
