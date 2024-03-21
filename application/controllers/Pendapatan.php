<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendapatan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendapatan_model');
    }
    public function index()
    {
        $id_admin = $this->session->userdata('ses_id');
        $data['pesanan'] = $this->Pendapatan_model->GetPesananbyAdminId($id_admin);
        $this->load->view('admin/pendapatan', $data);
    }
}
?>