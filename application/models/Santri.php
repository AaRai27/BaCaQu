<?php

    class ModelSantri extends CI_Model {

        function daftar($data) {
            return $this->db->insert('santri', $data);
        }

        function get_akun_id($id) {
            $this->db->where('id_santri', $id);
            return $this->db->get('santri');
        }

        function update_akun($id, $data) {
            $this->db->where('id_santri', $id);
            return $this->db->update('santri', $data);
        }

        function delete_akun($$id) {
            $this->db->where('id_santri',$id);
            return $this->db->delete('santri');
        }

    }

?>