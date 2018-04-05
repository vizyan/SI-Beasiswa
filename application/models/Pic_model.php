<?php

class Pic_model extends CI_Model{

	 //get all user from database
    public function getSchoolarship(){
        return $this->db->get('schoolarship_provider');
    }

    //get user by id
    public function getScById($id_sc){
        $query = $this->db->get_where('schoolarship_provider', ['id_schoolarship' => $id_sc]);
        return $query;
    }

	//save picture data to db
	function store_pic_data($data){
		$insert_data['name'] = $data['name'];
		$insert_data['open_date'] = $data['open_date'];
		$insert_data['close_date'] = $data['close_date'];
		$insert_data['description'] = $data['description'];
		$insert_data['file'] = $data['file'];

		$query = $this->db->insert('schoolarships', $insert_data);
	}

}
