<?php

    class Ustadz extends CI_Model {

        function daftar($data) {
            return $this->db->insert('ustadz', $data);
        }

        function get_akun_id($id) {
            $this->db->where('id_ustadz', $id);
            return $this->db->get('ustadz')->row_array();
        }

        function update_akun($id, $data) {
            $this->db->where('id_ustadz', $id);
            return $this->db->update('ustadz', $data);
        }

        function delete_akun($id) {
            $this->db->where('id_ustadz',$id);
            return $this->db->delete('ustadz');
        } 

    }

?>
