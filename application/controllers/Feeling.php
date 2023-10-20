<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feeling extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('templates/header-body');
		$this->load->view('pages/feeling-form');
		$this->load->view('templates/footer');
	}

	public function new(){
		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('pages/feeling-form');
		$this->load->view('templates/footer');
	}


}
