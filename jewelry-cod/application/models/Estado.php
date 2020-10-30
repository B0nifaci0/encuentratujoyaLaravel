<?php

class Estado extends CI_Model
{
    public function all()
  	{
      $query = $this->db->get('estados');
      return $query->result();
  	}


  public function find($id_estados)
  {
    $query = $this->db->query("SELECT * FROM estados WHERE id_estados = $id_estados");
    return $query->result();
  }

}
?>
