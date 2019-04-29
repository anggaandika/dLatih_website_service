<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_Auth', 'a');
    }

    public function index()
    {
        $data['action'] = "auth";
        $this->aturan();
        if ($this->form_validation->run() == false) {
            $this->load->view('--temp/-header', $data);
            $this->load->view('auth/log', $data);
            $this->load->view('--temp/-footer', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $user = $this->input->post('email');
        $pass = md5($this->input->post('pass'));

        $login = $this->a->Auth($user);

        if ($login) {
            //user ada
            if ($login["activated"] == '1') {
                // cek activasi
                if ($login["password"] == $pass) {
                    // cek Password
                    $data = [
                        'email' => $login['email']
                    ];
                    $dat2 = ["last_log" => date('Y-m-d h:i:s')];
                    $login = $this->a->log($user, $dat2);
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', ' <div class="alert alert-danger mt-5" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                // user tidak terdaftar
                $this->session->set_flashdata('message', ' <div class="alert alert-danger mt-5" role="alert">Akun belum active!</div>');
                redirect('auth');
            }
        } else {
            // user tidak ada
            $this->session->set_flashdata('message', ' <div class="alert alert-danger mt-5" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    //aturan

    function aturan()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Anda belum mengisi Username !'
        ]);
        $this->form_validation->set_rules('pass', 'Password', 'required|trim', [
            'required' => 'Anda belum mengisi Password !'
        ]);
    }
}