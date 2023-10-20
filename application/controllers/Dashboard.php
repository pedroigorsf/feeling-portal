<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->model("Galera_model");
        $data['pessoas'] = $this->Galera_model->index();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/top-nav');
        //$this->load->view('templates/header-body');
        $this->load->view('pages/feeling');
        $this->load->view('templates/footer');
    }


}
