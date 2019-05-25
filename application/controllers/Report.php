<?php
class Report extends CI_Controller
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
		//notivikasi
		$data['maa'] = $this->m->getAllMassageByGol(2);
		$data['m'] = $this->m->getAllMassageByGol();
		$data['j'] = $this->m->getJumlahMassages();
		//tampilan dashboard
		$this->load->view('--temp/-header', $data);
		$this->load->view('activity/massages/report&feedback/list', $data);
		$this->load->view('--temp/-footer');
	}
	public function reply()
	{
		$log = $this->session->userdata('email');
		//notivikasi
		$data['maa'] = $this->m->getAllMassageByGol(2);
		$data['m'] = $this->m->getAllMassageByGol();
		$data['j'] = $this->m->getJumlahMassages();
		//data user sesuai dari session
		$data['user'] = $this->a->getAllUser($log);
		$this->load->view('--temp/-header', $data);
		$this->load->view('activity/massages/report&feedback/reply');
		$this->load->view('--temp/-footer');
	}
	public function read($id)
	{
		$log = $this->session->userdata('email');
		//notivikasi
		$data['m'] = $this->m->getAllMassageByGol();
		$data['j'] = $this->m->getJumlahMassages();
		$data['r'] = $this->m->getMassage($id, "2");
		//data user sesuai dari session
		$data['user'] = $this->a->getAllUser($log);
		$this->load->view('--temp/-header', $data);
		$this->load->view('activity/massages/report&feedback/read');
		$this->load->view('--temp/-footer');
	}
}