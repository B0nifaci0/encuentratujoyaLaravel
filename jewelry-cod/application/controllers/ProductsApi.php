<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsApi extends CI_Controller {

	private $contextual_data;

	public function __construct() {
	    header('Access-Control-Allow-Origin: *');
	    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
	    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	    $method = $_SERVER['REQUEST_METHOD'];
	    if($method == "OPTIONS") {
	        die();
	    }
	    parent::__construct();
			$this->load->model('Product');
	}

	public function index()
	{
		$products = $this->Product->all();
    echo json_encode($products);
	}

	public function show($id_product)
	{

	}

	public function edit($id_product)
	{
		$data['product'] = $this->Product->find($id_product);
	}

}
