<?php

class Promotion extends CI_Model
{
	public function all()
	{
        $query = $this->db->get('promotions');
        return $query->result();
	}

	public function find($id_promotion){
		$query = $this->db->query("SELECT * FROM promotions WHERE id_promotion = $id_promotion");
			return $query->result();
	}

  public function save($file_image, $id_shop)
  {
    $data = array(
      'name'=> $this->input->post('name'),
			'description' => $this->input->post('description'),
      'terms' => $this->input->post('terms'),
			'image' => $file_image,
      'start_date' => $this->input->post('start_date'),
      'expiration_date' => $this->input->post('expiration_date'),
			'id_shop' => $id_shop
    );
    $this->db->insert('promotions',$data);
  }


	public function update(){
		if($this->input->post('image') == "") {
			$data = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'terms' => $this->input->post('terms'),
				'start_date' => $this->input->post('start_date'),
				'expiration_date' => $this->input->post('expiration_date')
			);
		}else{
				$data = array(
				'name' => $this->input->post('name'),
				'image' =>$this->input->post('image'),
				'description' => $this->input->post('description'),
				'terms' => $this->input->post('terms'),
				'start_date' => $this->input->post('start_date'),
				'expiration_date' => $this->input('expiration_date')

			);
		}
		$this->db->where('id_promotion', $this->input->post('id_promotion'));
		$this->db->update('promotions', $data);

	}

	public function updateImage($file_name){
		$data= array(
			'image'=>$file_name
		);

		$this->db->where('id_promotion',$this->input->post('id_promotion'));
		$this->db->update('promotions',$data);

	}

	public function getPromotionsByIdShop($id_shop){
		$sql = "SELECT * FROM promotions WHERE id_shop = $id_shop";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getPromotionsByIdUser($id_user)
	{
		$sql = "SELECT * FROM promotions WHERE id_shop = (SELECT id_shop FROM shops WHERE id_user = $id_user)";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function destroy($id_promotion)
	{
		$this->db->delete('promotions', array(
			'id_promotion' => $id_promotion));
	}


	public function getLastIdUser()
	{
		$sql = "SELECT MAX(id_user) AS id_user FROM users";
		$query = $this->db->query($sql);
		return $query->result()[0]->id_user;
	}

	public function getPromotiosByIdStyle($id_product)
	{
		$query = $this->db->get_where('promotions', array('id_product', $id_product));
		return $query->result();
	}


}
