<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        //data jumlah dalam angka
        $data['sis'] = $this->u->getAllByGroub('3');
        $data['pel'] = $this->u->getAllByGroub('2');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        $data['jumRe'] = $this->m->getJumlahMassages('1');
        $data['jumFe'] = $this->m->getJumlahMassages('2');
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('--temp/-footer');
    }
}