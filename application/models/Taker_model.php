<?php
    class Taker_model extends CI_Model{
        
        public function getTakerBySc($id_sc){
            $query = $this->db->get_where('view_taker', ['id_schoolarship' => $id_sc]);
            return $query;
        }
        
        public function joinSchoolarship($data){
            $insert_data['id_schoolarship'] = $data['id_schoolarship'];
            $insert_data['id_user'] = $data['id_user'];
            $insert_data['gpa'] = $data['gpa'];
            $insert_data['email'] = $data['email'];
            $insert_data['phone'] = $data['phone'];
            $insert_data['address'] = $data['address'];
            $insert_data['file'] = $data['file'];
            
            $query = $this->db->insert('takers', $insert_data);
            return $query;
        }
    }
?>
