<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class User extends REST_Controller
{

	function __construct()
	{
		parent::__construct();

		#Configure limit request methods
		$this->methods['index_get']['limit'] = 10; #10 requests per hour per user/key
		$this->methods['index_post']['limit'] = 10; #10 requests per hour per user/key
		$this->methods['index_delete']['limit'] = 10; #10 requests per hour per user/key
		$this->methods['index_put']['limit'] = 10; #10 requests per hour per user/key

		#Configure load model api table users
		$this->load->model('m_User', 'U');
	}

	function index_post()
	{

		#
		$user_data = array(
			'name' => $this->post('name'),
			'username' => $this->post('name') . '-dL',
			'email' => $this->post('email'),
			// 'no_tlp' => $this->post('tlp'),
			// 'jenis_kelamin' => $this->post('jenis_kelamin'),
			'alamat' => $this->post('alamat'),
			'password' => md5($this->post('password')),
			'activated' => '1',
			'created' => date('Y-m-d h:i:s'),
			'groub' => '3',
			'last_update' => date('Y-m-d h:i:s'),
			'photo' => 'default.jpg'
		);


		#Set response API if Success
		$response['SUCCESS'] = array('status' => TRUE, 'message' => 'success insert data', 'data' => $user_data);

		#Set response API if Fail
		$response['FAIL'] = array('status' => FALSE, 'message' => 'fail insert data', 'data' => null);

		#Set response API if exist data
		$response['EXIST'] = array('status' => FALSE, 'message' => 'exist data', 'data' => null);

		if ($this->U->get_by_username_email($this->post('username'), $this->post('email'))) {

			$this->response($response['EXIST'], REST_Controller::HTTP_FORBIDDEN);
		}

		#Check if insert user_data Success
		if ($this->U->insert($user_data)) {

			#If success
			$this->response($response['SUCCESS'], REST_Controller::HTTP_CREATED);
		} else {
			#If fail
			$this->response($response['FAIL'], REST_Controller::HTTP_FORBIDDEN);
		}
	}
}