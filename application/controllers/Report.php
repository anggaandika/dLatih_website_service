<?php
class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_User', 'u');
        $this->load->model('m_Auth', 'a');
        $this->load->model('m_Massages', 'm');

        is_logged_in();
    }
    public function index()
    {
        //session data email
        $log = $this->session->userdata('email');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        //data massages
        $data['data'] = $this->m->getAllMassageByGol("1");
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('report/list_report', $data);
        $this->load->view('--temp/-footer');
    }
    public function reply()
    {
        //session data email
        $log = $this->session->userdata('email');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('report/reply_report');
        $this->load->view('--temp/-footer');
    }
}