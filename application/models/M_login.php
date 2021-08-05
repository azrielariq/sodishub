<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model
{
    public function select_table_where($table, $username)
    {
        $this->db->select('*');
		$this->db->from($table);
		$this->db->where('username', $username);
		$this->db->limit(1);
		return $this->db->get()->result_array();
    }
}
