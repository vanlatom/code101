<?php 
class User_model extends CI_Model {

    public function add_save($data){
        $this->db->insert('user_db',$data);
    }
}