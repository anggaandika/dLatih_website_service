<?php
class Feedback extends CI_Controller
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
        //data massages
        $data['data'] = $this->m->getAllMassageByGol("2");
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('feedback/list_feedback', $data);
        $this->load->view('--temp/-footer');
    }
    public function reply()
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        $data['data'] = $this->m->getJumlahMassages();
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('feedback/reply_feedback');
        $this->load->view('--temp/-footer');
    }
}
