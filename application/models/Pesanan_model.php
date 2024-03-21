<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan_model extends CI_Model 
{
    public function countPesananByAdmin($admin_id)
    {
        $this->db->where('id_admin', $admin_id);
        return $this->db->count_all_results('pesanan');
    }
    public function GetPesananbyAdminId($id_admin)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get();
        return $query->result();
    }
    public function CreatePesanan($data)
    {
        $this->db->insert('pesanan', $data);
    }
    public function GetPesananbyId($id_pesanan)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('id_pesanan', $id_pesanan);
        $query = $this->db->get();
        return $query->row();
    }
    public function UpdatePesanan($id_pesanan, $data)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('pesanan', $data);
    }
    public function DeletePesanan($id_pesanan)
    {
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->delete('pesanan');
    }
}
?>