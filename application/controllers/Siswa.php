<?php
class Siswa extends CI_Controller
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
        //menampilkan data user
        $data['data'] = $this->u->getAllUserByGroub('3');
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('siswa/list_siswa', $data);
        $this->load->view('--temp/-footer');
    }
    public function detail($id)
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        // $data['sis'] = $this->a->getAllByGroub('3');
        //data sesuai groub dan id
        $data['pel'] = $this->u->getAllByGroubAndId($id, '3');
        $data['mas'] = $this->m->getAllMassageByGol();
        $data['jum'] = $this->m->getJumlahMassages();
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('siswa/detail_siswa', $data);
        $this->load->view('--temp/-footer');
    }

    public function banned($id)
    {
        $data = [
            'activated' => '2'
        ];
        $data['pel'] = $this->u->bannedUser($id, $data);
        redirect('siswa');
    }
}
