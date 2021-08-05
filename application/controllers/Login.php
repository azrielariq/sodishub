<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    
    public function index()
    {
        $this->load->view('V_login');
    }
    
    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('pwd');
        $tahun = $this->input->post('tahun');
        $data = $this->M_login->select_table_where('pengguna', $username);
        
        if($data) {
            $pass = $data[0]['password'];
            if (password_verify($password, $pass) == true) {
                $ses_data = [
                    'nip' => $data[0]['nip'],
                    'nama' => $data[0]['nama'],
                    'level' => $data[0]['level'],
                    'tahun' => $tahun
                ];
                
                if ($data[0]['level'] == 'Admin') {
                    $this->session->set_userdata('session_data', $ses_data);
                    redirect(base_url().'admin/dashboard');
                } else {
                    $this->session->set_userdata('session_data', $ses_data);
                    redirect(base_url().'tamu/dashboard');
                }
            } else {
                echo '<script language="javascript">
                window.alert("Login gagal! Password salah");
                window.location.href="'.base_url().'";
                </script>';
            }
        } else {
            echo '<script language="javascript">
            window.alert("Login gagal! Username tidak ditemukan");
            window.location.href="'.base_url().'";
            </script>';
        }
    }

    public function logout()
	{
		$this->session->unset_userdata('session_data');
        redirect(base_url());
	}
}
