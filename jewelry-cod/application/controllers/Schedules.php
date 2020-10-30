<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules extends CI_Controller {

	private $contextual_data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Schedule');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

	public function index()
	{
		$this->load->model('Branch');
		$id_user = $this->session->userdata('logged_in')['id_user'];
		$data['brnaches'] = $this->Branch->getBranchesByIdUser($id_user);
		for ($i=0; $i < count($data['brnaches']); $i++) {
			$data['brnaches'][$i]->schedules = $this->Schedule->getScheduresByIdBranch($data['brnaches'][$i]->id_branch);
		}
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('schedules/index', $data);
		$this->load->view('layouts/dashboard_food');
	}

  public function add()
  {
    if ($_POST) {
			$this->load->model('Branch');
			$this->Schedule->save();
			$this->session->set_flashdata('success', 'Los horarios se han guardado correctamente');
			redirect(URL . 'schedules/');
    }else{
			$this->load->model('Branch');
			$id_user = $this->session->userdata('logged_in')['id_user'];
			$data['branches'] = $this->Branch->getBranchesByIdUser($id_user);
			//print_r($data['branches']);
      $this->load->view('layouts/dashboard_nav', $this->contextual_data);
  		$this->load->view('schedules/add',$data);
  		$this->load->view('layouts/dashboard_food');
    }
  }

	public function edit($id_schedule)
	{
		if($_POST){
			$this->Schedule->update();
			$this->session->set_flashdata('success', 'El horario se ha modificado correctamente');
			redirect(URL . 'schedules/');
		}else{
			$data['schedule'] =$this->Schedule->find($id_schedule);
			$this->load->model('Branch');
			$data['branch'] = $this->Branch->getBranchByIdSchedules($id_schedule);
			$this->load->view('layouts/dashboard_nav', $this->contextual_data);
			$this->load->view('schedules/edit', $data);
			$this->load->view('layouts/dashboard_food');
		}
	}

	public function delete($id_schedule)
	{
		$this->Schedule->destroy($id_schedule);
		return;
	}
}
?>
