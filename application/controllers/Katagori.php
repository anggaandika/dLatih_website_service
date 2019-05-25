<?php
use PhpParser\Builder\Param;
use function GuzzleHttp\json_decode;

class Katagori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('m_Auth', 'a');
		$this->load->model('m_Katagori', 'k');
		$this->load->model('m_Massages', 'm');
	}

	public function index()
	{
		//session data email
		$log = $this->session->userdata('email');
		//data user sesuai dari session
		$data['user'] = $this->a->getAllUser($log);
		//menampilkan data user
		$data['data'] = $this->k->getData();
		//notivikasi
		$data['m'] = $this->m->getAllMassageByGol();
		$data['j'] = $this->m->getJumlahMassages();
		//tampilan dashboard
		$this->load->view('--temp/-header', $data);
		$this->load->view('katagori/list', $data);
		$this->load->view('--temp/-footer');
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$e = $this->db->where('id_katagori', $id)->get('katagori')->row();

		$kirim['id'] = $e->id_katagori;
		$kirim['name'] = $e->katagori;

		$this->output
			->set_content_type('application/json') //fungsi nya ngeset header file biar browser mengenali jenis data
			->set_output(json_encode($kirim)); //json_encode fungsinya untuk merubah data array ke bentuk json
	}

	public function input()
	{
		$data = [
			'katagori' => $this->input->post('katagori')
		];

		$this->k->insert($data);
		redirect('katagori');
	}


	//aturan

	function aturan()
	{
		$this->form_validation->set_rules('katagori', 'Katagori', 'required|trim', [
			'required' => 'Anda belum mengisi Nama !'
		]);
	}
}