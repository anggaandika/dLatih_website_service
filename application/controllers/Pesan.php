<?php
class Pesan extends CI_Controller
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
    public function massages($id, $gol)
    {
        //session data email
        $log = $this->session->userdata('email');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        //data massages
        $data['data'] = $this->m->getAllMassageByGol();
        $data['ma'] = $this->m->getMassage($id, $gol);
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('pesan', $data);
        $this->load->view('--temp/-footer');
    }
}