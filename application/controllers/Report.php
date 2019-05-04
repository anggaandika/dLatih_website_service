<?php
class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_Auth', 'a');
        $this->load->model('m_User', 'u');
        $this->load->model('m_Massages', 'm');

        is_logged_in();
    }
    public function index()
    {
        //session data email
        $log = $this->session->userdata('email');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        //notivikasi
        $data['m'] = $this->m->getAllMassageByGol();
        $data['j'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('report/list_report', $data);
        $this->load->view('--temp/-footer');
    }
    public function reply()
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        //notivikasi
        $data['m'] = $this->m->getAllMassageByGol();
        $data['j'] = $this->m->getJumlahMassages();
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('report/reply_report');
        $this->load->view('--temp/-footer');
    }
    public function read()
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka

        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('report/read_report');
        $this->load->view('--temp/-footer');
    }

}