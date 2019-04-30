<?php
class Pelatih extends CI_Controller
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
        $this->load->view('pelatih', $data);
        $this->load->view('--temp/-footer');
    }
    public function detail(){
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        $data['sis'] = $this->a->getAllByGroub('3');
        $data['pel'] = $this->a->getAllByGroub('2');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('detail_pelatih');
        
        $this->load->view('--temp/-footer');
    }
}