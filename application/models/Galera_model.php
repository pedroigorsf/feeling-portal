<?php

class Galera_model extends CI_Model{
    public function index()
    {
        return $this->db->get("tb_feeling")->result_array();
    }

    public function new($feeling){

        
        $this->db->insert("tb_feeling", $feeling);

    }

    public function show($id){

        return $this->db->get_where("tb_feeling", array("id" => $id))->row_array();
    }

    public function update($id, $pessoa){
        $this->db->where("id", $id);
        return $this->db->update("tb_feeling",$pessoa);
    }
}