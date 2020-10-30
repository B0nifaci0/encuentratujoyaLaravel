<?php

class Municipio extends CI_Model
{
    public function all()
  	{
      $query = $this->db->get('municipios');
      return $query->result();
  	}


  public function find($id_municipios)
  {
    $query = $this->db->query("SELECT * FROM municipio WHERE id_municipios = $id_municipios");
    return $query->result();
  }

  public function getMunicipiosByIdEstado($id_estado){
    $sql = "SELECT * FROM municipios WHERE id_estados = $id_estado";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
?>
