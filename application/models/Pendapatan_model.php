<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendapatan_model extends CI_Model 
{
    public function GetPesananbyAdminId($id_admin)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get();
        return $query->result();
    }
    public function GetPesananbyId($id_pesanan)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_pesanan', $id_pesanan);
        $query = $this->db->get();
        return $query->row();
    }
}
?>