<?php

class Read extends CI_Controller
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
	public function baca($id)
	{
		$log = $this->session->userdata('email');
		//notivikasi
		$data['m'] = $this->m->getAllMassageByGol();
		$data['j'] = $this->m->getJumlahMassages();
		$data['r'] = $this->m->getMassage($id);
		//data user sesuai dari session
		$data['user'] = $this->a->getAllUser($log);
		$this->load->view('--temp/-header', $data);
		$this->load->view('activity/massages/report&feedback/read');
		$this->load->view('--temp/-footer');
	}
}