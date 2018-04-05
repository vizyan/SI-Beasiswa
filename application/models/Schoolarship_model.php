<?php
    class Schoolarship_model extends CI_Model{

        //get all user from database
        public function getSchoolarship(){
            return $this->db->get('schoolarship_provider');
        }

        //get user by id
        public function getScById($id_sc){
            $query = $this->db->get_where('schoolarship_provider', ['id_schoolarship' => $id_sc]);
            return $query;
        }
        
        public function getSc($id_sc){
            $query = $this->db->get_where('schoolarships', ['id_schoolarship' => $id_sc]);
            return $query;
        }
        
        public function addSchoolarship($data){
            $insert_data['name'] = $data['name'];
            $insert_data['id_provider'] = $data['id_provider'];
            $insert_data['open_date'] = $data['open_date'];
            $insert_data['close_date'] = $data['close_date'];
            $insert_data['description'] = $data['description'];
            $insert_data['quota'] = $data['quota'];
            $data = 'upload/persyaratan/'.$data['file'];
            $insert_data['file'] = $data;
            
            $query = $this->db->insert('schoolarships', $insert_data);
        }
        
        public function getScByProvider($id_pr){
            $query = $this->db->get_where('schoolarship_provider', ['id_provider' => $id_pr]);
            return $query;
        }
    }
?>
