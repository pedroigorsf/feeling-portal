<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->model("Galera_model");

        $this->load->view('templates/header');
        $this->load->view('templates/top-nav');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');

    }

    public function access()
    {   
        $this->load->library('session');
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = $this->Login_model->access($username, $password);

        if ($user){
            $this->session->set_userdata("logged_user", $user);
            redirect("feeling");
        } else {
            redirect("login");
        }
    }




}
