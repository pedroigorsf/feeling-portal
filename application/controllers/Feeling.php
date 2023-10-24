<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feeling extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Galera_model");
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('pages/feeling-form');
		$this->load->view('templates/footer');
	}

	public function new()
	{

		$feeling = $_POST;
		$feeling["fk_user"] = '1';
		$feeling["last_activity"] = date("Y-m-d");

		$this->Galera_model->new($feeling);
		redirect("/");
	}

	public function edit($id)
	{


		$data['pessoa'] = $this->Galera_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/top-nav');
		$this->load->view('pages/feeling-form', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$this->load->model('Galera_model');
		$pessoa = $_POST;
		$this->Galera_model->update($id, $pessoa);
		redirect("/");
	}

	public function delete($id)
	{
		$this->load->model('Galera_model');
		$this->Galera_model->destroy($id);
		redirect("/");
	}


}
