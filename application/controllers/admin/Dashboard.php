<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $count_atk = $this->m_admin->count_table_rows('barang', '1');
        $count_kebersihan = $this->m_admin->count_table_rows('barang', '2');
        $count_cetak = $this->m_admin->count_table_rows('barang', '3');
        $count_listrik = $this->m_admin->count_table_rows('barang', '4');
        $script = '';

        $data = [
            'nav' => 'dashboard',
            'count_atk' => $count_atk,
            'count_kebersihan' => $count_kebersihan,
            'count_cetak' => $count_cetak,
            'count_listrik' => $count_listrik,
            'script' => $script
        ];

        $this->load->view('admin/template/v_header', $data);
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('admin/template/v_footer', $data);
    }
}
