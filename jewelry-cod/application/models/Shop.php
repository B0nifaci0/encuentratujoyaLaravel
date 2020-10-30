<?php

class Shop extends CI_Model
{
	public function all()
	{
    $query = $this->db->query("SELECT * FROM shops WHERE active=1");
    return $query->result();
	}

	public function find($id_shop)
	{
		$sql = "SELECT * FROM shops WHERE id_shop = $id_shop";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function save($image)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'name' => $this->input->post('name'),
			'password' => md5($this->input->post('password'))
		);
		$this->db->insert('users', $data);

		// Obtener otro modelo
		$CI =& get_instance();
		$CI->load->model('User');
		$id_user = $CI->User->getLastIdUser();

		$data = array(
			'name' => $this->input->post('shop_name'),
			'web_site' => $this->input->post('web_site'),
			'description' => $this->input->post('description'),
			'phone_number' => $this->input->post('phone_number'),
			'id_municipios' => $this->input->post('id_municipios'),
			'schedules' => $this->input->post('schedules'),
			'image' => $image,
			'id_user' => $id_user
		);
		$this->db->insert('shops', $data);

		return $this->getLastUser();
	}

	public function update()
	{
		// Actualizar informacion de la tienda
		if ($this->input->post('image') == "") {
			$data = array(
					'name' => $this->input->post('name'),
					'web_site' => $this->input->post('web_site')
			);
		}else{
			$data = array(
					'name' => $this->input->post('name'),
					'image' => $this->input->post('image'),
					'web_site' => $this->input->post('web_site')
			);
		}
		$this->db->where('id_shop', $this->input->post('id_shop'));
		$this->db->update('shops', $data);

		// Actualizar informacion del usuario
		if ($this->input->post('password') == "") {
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email')
			);
		}else{
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
		}
		$this->db->where('id_user', $this->input->post('id_user'));
		$this->db->update('users', $data);
	}

	public function search($param)
	{
		$sql = "SELECT * FROM shops WHERE name LIKE CONCAT('%', '$param', '%')";
		//echo "$sql";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getShopByIdUser($id_user)
	{
		$sql = "SELECT * FROM shops WHERE id_user = $id_user";

	//echo "$sql";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function getShopByIdProduct($id_product){
		$sql = "SELECT * FROM shops WHERE id_shop =
					(SELECT id_shop FROM products WHERE id_product = $id_product)";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function destroy($id_shop){
		$data = array(
			'active' => 0
		);
		$this->db->where('id_shop', $id_shop);
		$this->db->update('shops', $data);

	}

	public function updateImage($file_name)
	{
		$data = array(
			'image' => $file_name
		);

		$this->db->where('id_shop', $this->input->post('id_shop'));
		$this->db->update('shops', $data);
	}

	private function getLastUser(){
		$sql = "SELECT * FROM users WHERE id_user = (SELECT MAX(id_user) FROM users)";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

}
