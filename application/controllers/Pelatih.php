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
        $this->load->view('pelatih/list_pelatih', $data);
        $this->load->view('--temp/-footer');
    }
<<<<<<< HEAD

    public function detail($id)
=======
    public function detail()
>>>>>>> 9e3475fb461bd26b890d3bc35cd865041cf03bab
    {
        $log = $this->session->userdata('email');
        //data jumlah dalam angka
        // $data['sis'] = $this->a->getAllByGroub('3');
        $data['pel'] = $this->u->getAllByGroubAndId($id, '2');
        //data user sesuai dari session
        $data['user'] = $this->a->getAllUser($log);
        $this->load->view('--temp/-header', $data);
<<<<<<< HEAD
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
=======
        $this->load->view('detail_pelatih');
        $this->load->view('--temp/-footer');
    }
}
>>>>>>> 9e3475fb461bd26b890d3bc35cd865041cf03bab
