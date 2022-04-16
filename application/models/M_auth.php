<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    function cek_signup($data){
        return $this->db->get_where('user', ['email' => $data]);
    } 

    function insert_data($table, $data){
        $this->db->insert($table, $data);
        return true;
    }
    function get_data($table, $where){
        return $this->db->get_where($table, $where);
    }
    function cek_login($where){
        return $this->db->get_where('user', $where);
    }
    
}