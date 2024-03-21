<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{
    public function checkLogin($email, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $user = $query->row();

        if ($user && password_verify($password, $user->password)) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function CreateUser($data)
    {
        $this->db->insert('admin', $data);
    }   
}

?>