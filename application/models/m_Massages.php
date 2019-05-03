<?php

class m_Massages extends CI_Model
{
    private $m_tabel = "massages";
    private $s_tabel = "user";

    public function getAllMassageByGol($gol = null)
    {
        if (!$gol) {
            $this->db->select('*')->from($this->m_tabel);
            $this->db->join($this->s_tabel, $this->s_tabel . ".id =" . $this->m_tabel . ".id_user");
            return $this->db->get()->result();
        } else {
            $this->db->where($this->m_tabel . ".gol", $gol);
            $this->db->select('*')->from($this->m_tabel);
            $this->db->join($this->s_tabel, $this->s_tabel . ".id =" . $this->m_tabel . ".id_user");
            return $this->db->get()->result();
        }
    }
    public function getJumlahMassages()
    {
        return $this->db->get($this->m_tabel)->num_rows();
    }
}
