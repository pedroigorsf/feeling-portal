<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feeling extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('pages/feeling-form');
		$this->load->view('templates/footer');
	}

	public function new(){

		$feeling = $_POST;
        $feeling["fk_user"] = '1';
		
		$this->load->model("Galera_model");
		$this->Galera_model->new($feeling);
	}


}
