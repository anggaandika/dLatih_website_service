<?php
class Pelatih extends CI_Controller
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
        $data['data'] = $this->u->getAllUserByGroub('2');
        //notivikasi
        $data['m'] = $this->m->getAllMassageByGol();
        $data['j'] = $this->m->getJumlahMassages();
        //tampilan dashboard
        $this->load->view('--temp/-header', $data);
        $this->load->view('pelatih/list_pelatih', $data);
        $this->load->view('--temp/-footer');
    }
    public function detail($id)
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        // $data['sis'] = $this->a->getAllByGroub('3');
        //data sesuai groub dan id
        $data['pel'] = $this->u->getAllByGroubAndId($id, '2');
        //notivikasi
        $data['m'] = $this->m->getAllMassageByGol();
        $data['j'] = $this->m->getJumlahMassages();
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
        $this->load->view('pelatih/detail_pelatih', $data);

        $this->load->view('--temp/-footer');
    }

    public function banned($id)
    {
        $data = [
            'activated' => '2'
        ];
        $data['pel'] = $this->u->bannedUser($id, $data);
        redirect('pelatih/detail/' . $id);
    }
}
