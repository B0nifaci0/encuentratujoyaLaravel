<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller {

	private $contextual_data;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Estado');
		$this->contextual_data['controller_name'] = $this->uri->segment(1);
	}


}
?>
