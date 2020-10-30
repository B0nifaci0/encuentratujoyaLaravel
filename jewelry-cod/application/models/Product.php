<?php

class Product extends CI_Model
{

	public function all()
	{
				$query = $this->db->get_where('products', array('active' => 1));
        return $query->result();
	}

	public function find($id_product)
	{
		$query = $this->db->query("SELECT * FROM products WHERE id_product = $id_product");
		return $query->result();
	}

	public function save($file_name, $id_shop)
	{
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'purity' => $this->input->post('purity'),
			'weight' => $this->input->post('weight'),
			'price' => $this->input->post('price'),
			'image' => $file_name,
			'nationality' => $this->input->post('nationality'),
			'id_category' => $this->input->post('category'),
			'size' => $this->input->post('size'),
			'id_shop' => $id_shop
		);

		$this->db->insert('products', $data);
	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'purity' => $this->input->post('purity'),
			'weight' => $this->input->post('weight'),
			'price' => $this->input->post('price'),
			'nationality' => $this->input->post('nationality'),
			'id_category' => $this->input->post('category')
		);

		$this->db->where('id_product', $this->input->post('id_product'));
		$this->db->update('products', $data);
	}

	public function updateImage($file_name)
	{
		$data = array(
			'image' => $file_name
		);

		$this->db->where('id_product', $this->input->post('id_product'));
		$this->db->update('products', $data);
	}

	public function search($id_category, $min_price, $max_price)
	{
		ini_set('error_reporting', E_STRICT);
		if ($min_price == "" || $max_price == "") {
			$sql = "SELECT id_product, products.name AS product_name,
							products.description AS product_description, purity, weight, price,
							products.image AS product_image, nationality, products.id_category as id_category, material,
							id_branch, shops.id_shop AS id_shop,
							shops.name AS shop_name, shops.image AS shop_image, web_site,
							shops.description AS shop_description, email, phone_number,  shops.id_municipios AS id_municipios, municipios.name AS nombre_municipio
							FROM products, shops, categories, municipios
							WHERE products.id_shop = shops.id_shop
							AND products.active = 1
							AND categories.`id_category` = products.`id_category`
							AND municipios.`id_municipios` = shops.`id_municipios`
							AND products.id_category = $id_category
							";
							// echo "$sql";
				}else{
					$sql = "SELECT id_product, products.name AS product_name,
									products.description AS product_description, purity, weight, price,
									products.image AS product_image, nationality, products.id_category as id_category, material,
									id_branch, shops.id_shop AS id_shop,
									shops.name AS shop_name, shops.image AS shop_image, web_site,
									shops.description AS shop_description, email, phone_number,  shops.id_municipios AS id_municipios, municipios.name AS nombre_municipio
									FROM products, shops, categories, municipios
									WHERE products.id_shop = shops.id_shop
									AND products.active = 1
									AND categories.`id_category` = products.`id_category`
									AND municipios.`id_municipios` = shops.`id_municipios`
									AND products.id_category = $id_category
									AND price BETWEEN $min_price AND $max_price;
									";
								//	echo "$sql";

				}

						// AND products.name LIKE CONCAT('%', '$param', '%')
		//echo "$sql";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getProductsByIdUser($id_user)
	{
		$sql = "SELECT * FROM products WHERE id_shop = (SELECT id_shop FROM shops WHERE id_user = $id_user)";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getAllWithShopInformation()
	{
		$sql = "SELECT id_product, products.name AS product_name,
						products.description AS product_description, purity, weight, price,
						products.image AS product_image, nationality, id_category, material,
						id_branch, shops.id_shop AS id_shop,
						shops.name AS shop_name, shops.image AS shop_image, web_site,
						shops.description AS shop_description, email, phone_number
						FROM products, shops
						WHERE products.id_shop = shops.id_shop
						AND products.active = 1";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getImageModel()
	{
		$CI =& get_instance();
		$this->ext = $CI->load->model('Image');

	}

	public function destroy($id_product)
	{
		$data = array(
			'active' => 0
		);

		$this->db->where('id_product', $id_product);
		$this->db->update('products', $data);
	}

	public function getProductsByIdShop($id_shop)
	{
		$query = $this->db->get_where('products', array('id_shop' => $id_shop, 'active' => 1));
		return $query->result();
	}

}

?>
