<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("Galera_model");
        $data['pessoas'] = $this->Galera_model->index();
        $data['title'] = "Como a galera tá?";

		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('templates/header-body');
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer');

	}

	
}
