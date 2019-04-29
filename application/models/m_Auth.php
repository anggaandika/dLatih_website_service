<?php

class m_Auth extends CI_Model
{
    private $m_tabel = "user";

    public function Auth($username)
    {
        return $this->db->get_where($this->m_tabel, ['username' => $username])->row_array();
    }

    public function log($username, $data)
    {
        $this->db->update($this->m_tabel, $data, ["username" => $username]);
    }

    public function getAllUser($email)
    {
        return $this->db->get_where($this->m_tabel, ['email' => $email])->row_array();
    }
}