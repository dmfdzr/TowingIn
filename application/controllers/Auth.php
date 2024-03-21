<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        $this->load->view('admin/welcome-login');
    }
    public function dashboard()
    {
        $this->load->view('admin/halaman-utama');
    }
    public function register()
    {
        $this->load->view('admin/daftar');
    }
    public function profil()
    {
        $this->load->view('admin/profil');
    }
    public function manual()
    {
        $this->load->view('manual');
    }
    public function premium()
    {
        $this->load->view('admin/premium');
    }
    public function create()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'no' => $this->input->post('no'),
            'email' => $this->input->post('email'), 
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'status' => 'Basic'
        );
        $this->Auth_model->CreateUser($data);
        redirect('auth');
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $checkLogin = $this->Auth_model->checkLogin($email, $password);
        if ($checkLogin->num_rows() > 0) {
            $data = $checkLogin->row_array();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('ses_id', $data['id_admin']);
            $this->session->set_userdata('ses_nama', $data['nama']);
            $this->session->set_userdata('ses_email', $data['email']);
            $this->session->set_userdata('ses_no', $data['no']);
            $this->session->set_userdata('ses_status', $data['status']);
            redirect('auth/dashboard');
        } 
        else 
        {
            $this->session->set_flashdata('error', 'Gagal login: Cek username, password!');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
?>