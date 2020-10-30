<?php

class Branch extends CI_Model
{
	public function all()
	{
		$query = $this->db->query($sql);
    return $query->result();
	}

	public function find($id_branch)
	{
		$query = $this->db->query("SELECT * FROM branches WHERE id_branch = $id_branch");
		return $query->result()[0];
	}

	public function getFirst($id_shop)
	{
		$sql = "SELECT * FROM branches WHERE id_shop = $id_shop LIMIT 1";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function search($param)
	{
		$sql = "SELECT * FROM branches WHERE name LIKE CONCAT('%', '$param', '%')";
		//echo "$sql";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function save($id_shop)
	{
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'phone_number' => $this->input->post('phone_number'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'id_shop' => $id_shop
		);
		$this->db->insert('branches', $data);
	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'phone_number' => $this->input->post('phone_number'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude')
		);

		$this->db->where('id_branch', $this->input->post('id_branch'));
		$this->db->update('branches', $data);
	}

	public function getBranchesByIdUser($id_user)
	{
		$sql = "SELECT * FROM branches WHERE active = 1 AND id_shop = (SELECT id_shop FROM shops WHERE id_user = $id_user)";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getBranchByIdSchedules($id_schedule)
	{
		$sql = "SELECT * FROM branches WHERE id_branch = (SELECT id_branch FROM schedules WHERE id_schedule = $id_schedule)";
		$query = $this->db->query($sql);
		return $query->result()[0];
	}

	public function destroy($id_branch)
	{
		$data = array(
			'active' => 0
		);

		$this->db->where('id_branch', $id_branch);
		if ($this->db->update('branches', $data)) {
			return true;
		}else{
			return false;
		}
	}

}

?>
