<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAdById($id_p)
	{
        $query = $this->db->get_where('providers', ['id_provider' => $id_p]);
        return $query;
    }
	public function select($table)
	{

	 	return $this->db->get($table);
	}
	public function selectwhere($table, $data)
	{

		return $this->db->get_where($table, $data);
	}

	public function delete($table, $data)
	{
		return $this->db->delete($table, ['id_provider' => $data]);
	}

	public function update($table,$data,$key)
	{
		return $this->db->update($table, $data,$key);
	}

    public function addAdmin($data){
        $this->db->insert('admins', $data);
    }
}
