<?php


class Login_model extends CI_Model{
    public function access($username, $password){
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $user = $this->db->get("tb_user")->row_array();
        return $user;
    }
}