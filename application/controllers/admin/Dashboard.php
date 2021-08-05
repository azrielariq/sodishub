<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $script = '';
        $data = [
            'nav' => 'dashboard',
            'script' => $script
        ];

        $this->load->view('admin/template/V_header', $data);
        $this->load->view('admin/V_dashboard');
        $this->load->view('admin/template/V_footer', $data);
    }
}
