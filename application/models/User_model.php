<!--
CREATE TABLE users(
    noId_user VARCHAR(14) NOT NULL PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    birthday VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    token VARCHAR(255),
    status VARCHAR(10) NOT NULL
)-->

<?php
    class User_model extends CI_Model{

        public function __construct(){
        }

        //get all user from database
        public function getUser(){
        }

        //get user by id
        public function getUserById($username){
        }

        //add user to database
        public function addProvider($data){
            $this->db->insert('providers', $data);
        }

        public function updateUser($id, $data){
            $this->db->where('id_user', $id);
		    $query = $this->db->update('users', $data);
            return $query;
        }

        public function loginUser($noId_user){
            $query = $this->db->get_where('users', ['id_user' => $noId_user]);
            return $query;
        }

        public function loginAdmin($username){
            $query = $this->db->get_where('admins', ['username' => $username]);
            return $query;
        }

        public function loginProvider($username){
            $query = $this->db->get_where('providers', ['username' => $username]);
            return $query;
        }

    }
?>
