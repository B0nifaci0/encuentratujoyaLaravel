<?php

class Category extends CI_Model
{

  public function all()
  {
    $query = $this->db->get('categories');
    return $query->result();
  }

  public function find($id_category)
  {
    $query = $this->db->query("SELECT * FROM categories WHERE id_category = $id_category");
    return $query->result()[0];
  }

  public function save($id_shop)
	{
		$data = array(
			'name' => $this->input->post('name'),
      'id_shop' => $id_shop
		);
		$this->db->insert('categories', $data);
	}

  public function update(){
    $data = array(
      'name' => $this->input->post('name')
    );
    $this->db->where('id_category', $this->input->post('id_category'));
    $this->db->update('categories', $data);
  }

  public function getCategoriesByIdUser($id_user)
  {
    $sql = "SELECT * FROM categories WHERE active =1 AND id_shop = (SELECT id_shop FROM shops WHERE id_user = $id_user)";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function getCombo($id_category)
  {
    $categories = array();
    array_push($categories, $this->equalTo($id_category)[0]);
    foreach ($this->distinctFrom($id_category) as $category) {
      array_push($categories, $category);
    }
    return $categories;
  }

  private function equalTo($id_category)
  {
    $query = $this->db->get_where('categories', array('id_category' => $id_category));
    return $query->result();
  }

  private function distinctFrom($id_category)
  {
    $query = $this->db->query("SELECT * FROM categories WHERE id_category <> $id_category");
    return $query->result();
  }

  public function destroy($id_category)
	{
		$data = array(
			'active' => 0
		);

		$this->db->where('id_category', $id_category);
    if ($this->db->update('categories', $data)) {
      return true;
    }else{
      return false;
    }
	}

}
