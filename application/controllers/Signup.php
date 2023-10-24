<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function index()
    {
        $this->load->model("Galera_model");

        $this->load->view('templates/header');
        $this->load->view('templates/top-nav');
        $this->load->view('pages/signup.php');
        $this->load->view('templates/footer');

    }

    public function new()
    {
        $this->load->model("Users_model");
        $user = array(
            "name" => $_POST['name'],
            "last_name" => $_POST['last_name'],
            "username" => $_POST['username'],
            "password" => md5($_POST['password'])
        );

        $this->Users_model->new($user);
        redirect("/");
    }




}
