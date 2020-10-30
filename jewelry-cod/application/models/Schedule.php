<?php

class Schedule extends CI_Model
{
    public function all()
  	{
      $query = $this->db->get('schedules');
      return $query->result();
  	}

    public function find($id_schedule)
    {
      $query = $this->db->query("SELECT * FROM schedules WHERE id_schedule = $id_schedule");
      return $query->result()[0];
    }

    public function save()
    {
      $data = array(
        'day' => $this->input->post('day'),
        'opening_hour' => $this->input->post('opening_hour'),
        'closing_hour' => $this->input->post('closing_hour'),
        'id_branch' => $this->input->post('id_branch')
      );
      $this->db->insert('schedules',$data);
    }

    public function update()
    {
      $data = array(
        'day' => $this->input->post('day'),
        'opening_hour' => $this->input->post('opening_hour'),
        'closing_hour' => $this->input->post('closing_hour')
      );
      $this->db->where('id_schedule', $this->input->post('id_schedule'));
      $this->db->update('schedules', $data);
    }

  public function destroy($id_schedule)
  {
    $this->db->delete('schedules', array(
      'id_schedule' => $id_schedule));
  }

  public function getScheduresByIdBranch($id_branch){
    $sql = "SELECT * FROM schedules WHERE id_branch = $id_branch";
    $query = $this->db->query($sql);
    return $query->result();
  }
}
?>
