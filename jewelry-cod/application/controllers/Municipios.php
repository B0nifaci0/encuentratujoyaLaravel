<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios extends CI_Controller {

	private $contextual_data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Municipio');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}

  public function get($id_estado){
    $data['municipios'] = $this->Municipio->getMunicipiosByIdEstado($id_estado);
    $this->load->view('partials/municipio_combo', $data);
  }

}
?>
