<?php

class Customer extends CI_Model
{
    public function all()
  	{
      $query = $this->db->get('customers');
      return $query->result();
  	}

    public function save()
    {
      //obtenemos otro modelo
      $CI =& get_instance();
      $CI->load->model('User');
      $id_user = $CI->User->getLastIdUser();

      $data = array(
        'name' => $this->input->post('name'),
        'surnames' => $this->input->post('surnames'),
        'phone_number' => $this->input->post('phone_number'),
        'id_user' => $id_user
      );
      $this->db->insert('customers',$data);

      $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      );
      $this->db->insert('users', $data);
    }

    public function update()
    {
      $data = array(
        'name' => $this->input->post('name'),
        'surnames' => $this->input->post('surnames'),
        'phone_number' => $this->input->post('phone_number')
      );
      $this->db->where('id_customer', $this->input->post('id_customer'));
      $this->db->update('customers', $data);
    }

  public function find($id_customer)
  {
    $query = $this->db->query("SELECT * FROM customers WHERE id_customer = $id_customer");
    return $query->result();
  }

  public function destroy($id_promotion)
  {
    $this->db->delete('customer', array(
      'id_customer' => $id_customer));
  }
}
?>
