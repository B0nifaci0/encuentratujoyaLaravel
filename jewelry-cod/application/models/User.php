<?php

class User extends CI_Model
{
	public function all()
	{
        $query = $this->db->get('users');
        return $query->result();
	}

	public function find($id_user){
		$query = $this->db->query("SELECT * FROM users WHERE id_user = $id_user");
		  return $query->result()[0];
	}

	public function getUserByEmail($email){
		$query = $this->db->query("SELECT * FROM users WHERE email = '$email'");
		  return $query->result()[0];
	}

	public function save()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'name' => $this->input->post('name')
		);
		$this->db->insert('users', $data);

		return $this->getLastUser();

	}

	public function search($param)
	{
		$sql = "SELECT * FROM users WHERE name LIKE CONCAT('%', '$param', '%')";
		//echo "$sql";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getByEncryptedId($id_user)
	{
		$query = $this->db->get_where('users', array('md5(id_user)' => $id_user));
		return $query->result()[0];
	}

	public function getLastIdUser()
	{
		$sql = "SELECT MAX(id_user) AS id_user FROM users";
		$query = $this->db->query($sql);
		return $query->result()[0]->id_user;
	}

	private function getLastUser(){
		$sql = "SELECT * FROM users WHERE id_user = (SELECT MAX(id_user) FROM users)";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function update_password()
	{
		$data = array(
			'password' => md5($this->input->post('password'))
		);

		$this->db->where('id_user', $this->input->post('id_user'));
		if ($this->db->update('users', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function update_image($image)
	{
		$data = array(
			'image' => $image
		);

		$this->db->where('id_user', $this->input->post('id_user'));
		if ($this->db->update('users', $data)) {
			return true;
		}else{
			return false;
		}
	}

	public function destroy($id_user){
		$this->db->delete('users', array(
			'id_user' => $id_user));

		}

		public function checkDatabase($email, $password)
	  {
	    $this->db->select('id_user, username, email, name, image');
	    $this->db->from('users');
	    $this->db->where('email', $email);
	    $this->db->where('password', md5($password));
	    $this->db->limit(1);

	    $query = $this->db->get();

	    if($query->num_rows() == 1)
	    {
	      return $query->result();
	    }
	    else
	    {
	      return false;
	    }
	  }

		public function check($id_user)
		{
			$data = array(
				'verified' => 1
			);
			$this->db->where('id_user', $id_user);
			$this->db->update('users', $data);
		}

}
