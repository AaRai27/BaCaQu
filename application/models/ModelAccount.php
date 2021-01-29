<?php

class ModelAccount extends CI_Model
{

    function daftar($data)
    {
        return $this->db->insert('account', $data);
    }

    function cek_username($username)
    {
        $this->db->where('username', $username);
        $cek = $this->db->get('account')->row();
        if (isset($cek)) {
            return true;
        } else {
            return false;
        }
    }

    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $cek = $this->db->get('account')->row();
        if ($cek) {
            return true;
        } else {
            return false;
        }
    }

    function get_akun_id($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('account')->row_array();
    }

    function get_akun_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('account')->row_array();
    }

    function update_akun($id, $data)
    {
        $this->db->where('user_id', $id);
        return $this->db->update('account', $data);
    }

    function delete_akun($username)
    {
        $this->db->where('username', $username);
        return $this->db->delete('account');
    }

    function count_ustadz()
    {
        $this->db->like('user_id', 'u');
        return $this->db->get('account')->num_rows();
    }

    function count_santri()
    {
        $this->db->like('user_id', 's');
        return $this->db->get('account')->num_rows();
    }
}
