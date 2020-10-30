<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	private $contextual_data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

	public function index()
	{
		$data['customers'] = $this->Customer->all();
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('customers/index', $data);
		$this->load->view('layouts/dashboard_food');
	}

  public function add()
  {
    if ($_POST) {
      if ($this->form_validation->run() === TRUE) {
				$this->Customer->save();
				$data['customers'] = $this->Customer->all();
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
	  		$this->load->view('customers/index', $data);
	  		$this->load->view('layouts/dashboard_food');
			}
    }else{
      $this->load->view('layouts/dashboard_nav', $this->contextual_data);
  		$this->load->view('customers/add');
  		$this->load->view('layouts/dashboard_food');
    }
  }

	public function edit($id_customer)
	{
		if($_POST){
			if($this->form_validation->run() === TRUE){
				$this->Customer->update();
				$data['customers'] = $this->Customer->all();
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('customers/index', $data);
				$this->load->view('layouts/dashboard_food');
				echo'lkfvhdfhl';
			}else{
				$this->load->view('layouts/dashboard_nav', $this->contextual_data);
				$this->load->view('customers/edit');
				$this->load->view('layouts/dashboard_food');
			}
		}else{
			echo'ffksklflfklf';
			$data['customer'] =$this->Customer->find($id_customer);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('customers/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function delete($id_customer)
	{
		$this->Customer->destroy($id_customer);
		return;
	}
}
?>
