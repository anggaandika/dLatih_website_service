<?php

class m_Katagori extends CI_Model
{
	private $m_tabel = "katagori";

	public function getData()
	{
		return $this->db->get($this->m_tabel)->result_array();
	}

	function insert($data)
	{
		#Insert data to table tb_users
		$insert = $this->db->insert($this->m_tabel, $data);
		return $insert;
	}
}