<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
	}

	public function index()
	{
		$this->load->view('layouts/nav');
		$this->load->view('products/index');
	}

	public function show($id_product)
	{
		$this->input->post('criterio');
	}

	public function showInModal()
	{
		$data['product'] = $this->Product->find($id_product);
		$this->load->model('Image');
		$data['product'][0]->images = $this->Image->getProductImagesOf($data['product'][0]->id_product);
		$this->load->model('Category');
		$data['product'][0]->categories = $this->Category->getCombo($data['product'][0]->id_category);
		$this->load->view('layouts/dashboard_nav', $this->contextual_data);
		$this->load->view('products_manager/edit', $data);
		$this->load->view('layouts/dashboard_food');
	}

	public function search()
	{
		$this->load->model('Estado');
		$data['estados'] = $this->Estado->all();
		$this->load->model('Category');
		$data['categories'] = $this->Category->all();
		$param = (!isset($_REQUEST['id_category'])) ? "" : $_REQUEST['id_category'];

		if (isset($_REQUEST['range'])) {
			$range = explode(",", $_REQUEST['range']);
			$min_price = $range[0];
			$max_price = $range[1];
		}else{
			$min_price = "";
			$max_price = "";
		}


		$this->load->model('Shop');
		$data['shops'] = $this->Shop->all();
		$data['products'] = $this->Product->search($param, $min_price, $max_price);
		//$this->load->model("Image");
		//$images = $this->Image->getProductImagesOf($data['products']->id_product);
		$this->load->model('Image');
		for ($i=0; $i < count($data['products']); $i++) {
			$data['products'][$i]->images = $this->Image->getProductImagesOf($data['products'][$i]->id_product);
			$data['products'][$i]->shop = $this->Shop->getShopByIdProduct($data['products'][$i]->id_product);
		}

		$data['range']->min = $min_price;
		$data['range']->max = $max_price;

		$this->load->view('menu');
		$this->load->view('products/result', $data);
	}

	public function delete($id_product)
	{
		$this->Product->destroy($id_product);
		return;
	}

}
?>
