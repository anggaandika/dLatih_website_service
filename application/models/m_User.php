<?php
use phpDocumentor\Reflection\Types\This;

class m_User extends CI_Model
{
    private $m_tabel = "user";

    public function getAllUserByGroub($groub)
    {
        return $this->db->get_where($this->m_tabel, ['groub' => $groub])->result_array();
    }

    public function getAllByGroub($data)
    {
        $this->db->where('groub', $data);
        return $this->db->get($this->m_tabel)->num_rows();
    }
    public function getAllByGroubAndId($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->where('groub', $data);
        return $this->db->get($this->m_tabel)->row_array();
    }
    public function bannedUser($id, $data)
    {
        $this->db->update($this->m_tabel, $data, ["id" => $id]);
    }

    function get_by_username_email($username, $email)
    {
        #Get data by username or email
        $this->db->where('username', $username);
        $this->db->or_where('email', $email);
        $data = $this->db->get($this->m_tabel)->row();

        return $data;
    }

    function insert($data)
    {

        #Insert data to table tb_users
        $insert = $this->db->insert($this->m_tabel, $data);

        return $insert;
    }
}