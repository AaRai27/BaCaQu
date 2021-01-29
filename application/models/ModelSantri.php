<?php

    class Santri extends CI_Model {

        function daftar($data) {
            return $this->db->insert('santri', $data);
        }

        function get_akun_id($id) {
            $this->db->where('id_santri', $id);
            return $this->db->get('santri')->row_array();
        }

        function get_akun_by_ustadz($id_ustadz) {
            $this->db->where('id_ustadz', $id_ustadz);
            return $this->db->get('santri')->result_array();
        }

        function update_akun($id, $data) {
            $this->db->where('id_santri', $id);
            return $this->db->update('santri', $data);
        }

        function delete_akun($id) {
            $this->db->where('id_santri',$id);
            return $this->db->delete('santri');
        }

    }
?>
