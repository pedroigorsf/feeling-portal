<?php


class Users_model extends CI_Model{

    public function new($user){
        $this->db->insert('tb_user', $user);
    }
}