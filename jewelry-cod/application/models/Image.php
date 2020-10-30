<?php

class Image extends CI_Model
{

  public function save_product_image($image_name)
  {
    $data = array(
			'name' => $image_name,
			'date_upload' => date('Y-m-d'),
      'id_product' => $this->input->post("id_product")
		);
		$this->db->insert('product_images', $data);
    return $this->getLastImage();
  }

  public function getProductImagesOf($id_product)
  {
    $query = $this->db->get_where('product_images', array('id_product' => $id_product));
    return $query->result();
  }

  private function getLastImage()
  {
    $sql = "SELECT MAX(id_image) AS id_image FROM product_images";
		$query = $this->db->query($sql);
		return $query->result()[0]->id_image;
  }
}

?>
