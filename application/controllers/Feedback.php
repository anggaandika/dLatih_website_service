<?php
class Feedback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_Auth', 'a');
        $this->load->model('m_User', 'u');

        is_logged_in();
    }
    public function index()
    {
        //session data email
        $log = $this->session->userdata('email');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        //menampilkan data user
        $data['data'] = $this->u->getAllUserByGroub('2');
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('feedback', $data);
        $this->load->view('--temp/-footer');
    }
    public function reply()
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka

        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('reply_feedback');
        $this->load->view('--temp/-footer');
    }
}
