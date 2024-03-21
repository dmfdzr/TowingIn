<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_model');
    }
    public function index()
    {
        $id_admin = $this->session->userdata('ses_id');
        $data['pesanan'] = $this->Pesanan_model->GetPesananbyAdminId($id_admin);
        $this->load->view('admin/riwayat-pesanan', $data);
    }
    public function addpesanan()
    {
        $this->load->view('admin/detail-pesanan');
    }
    public function create()
    {
        $admin_status = $this->session->userdata('ses_status');
        if ($admin_status == 'Basic' && $this->Pesanan_model->countPesananByAdmin($this->session->userdata('ses_id')) >= 50) 
        {
        redirect('auth/dashboard');
        }
        $data = array(
            'id_admin' => $this->session->userdata('ses_id'),
            'plat_no' => $this->input->post('plat_no'),
            'biaya' => $this->input->post('biaya'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'alamat_pengambilan' => $this->input->post('alamat_pengambilan'),
            'alamat_tujuan' => $this->input->post('alamat_tujuan'),
            'no_pengirim' => $this->input->post('no_pengirim'),
            'no_penerima' => $this->input->post('no_penerima'),
            'pj' => $this->input->post('pj'),
            'status' => $this->input->post('status'),
        );
        $this->Pesanan_model->CreatePesanan($data);
        redirect('auth/dashboard');
    }
    public function edit($id_pesanan)
    {
        $data['pesanan'] = $this->Pesanan_model->GetPesananbyId($id_pesanan);
        $this->load->view('admin/edit-pesanan', $data);
    }
    public function update()
    {
        $id_pesanan = $this->input->post('id_pesanan');
        $data = array(
            'id_admin' => $this->session->userdata('ses_id'),
            'status' => $this->input->post('status'),
            'biaya' => $this->input->post('biaya'),
            'pj' => $this->input->post('pj'),
        );
        $this->Pesanan_model->UpdatePesanan($id_pesanan, $data);
        redirect('pesanan');
    }
    public function delete($id_pesanan)
    {
        $this->Pesanan_model->DeletePesanan($id_pesanan);
        redirect('pesanan');
    }
}
?>