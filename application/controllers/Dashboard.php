<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_Auth', 'a');
    }

    public function index()
    {
        $log = $this->session->userdata('email');
        $data ['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('dashboard');
        $this->load->view('--temp/-footer');
    }
}