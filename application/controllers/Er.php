<?php

class Er extends CI_Controller
{

    public function index()
    {
        $this->load->view('--temp/-header');
        $this->load->view('errors/404.php');
        $this->load->view('--temp/-footer');
    }
}