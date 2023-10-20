<?php

class Galera_model extends CI_Model{
    public function index()
    {
        return $this->db->get("tb_feeling")->result_array();
    }

    public function new($feeling){

        
        $this->db->insert("tb_feeling", $feeling);

    }
}