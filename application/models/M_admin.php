<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function count_table_rows($table, $kategori)
    {
        $this->db->count_all_results($table);
        $this->db->from($table);
        $this->db->where('id_kategori', $kategori);
        return $this->db->count_all_results();
    }
}
