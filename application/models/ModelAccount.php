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
        $result = $this->db->get('account');
        if ($result->num_rows() == 1) {
            return $result->row();
        } else {
            return false;
        }
    }

    function get_akun_id($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('account');
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
}
