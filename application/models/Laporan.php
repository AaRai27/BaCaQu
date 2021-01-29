<?php

    class ModelLaporan extends CI_Model {

        function buat_laporan($data) {
            return $this->db->insert('laporan', $data);
        }

        function get_all() {
            return $this->db->get('laporan')->result_array();
        }

        function get_laporan_santri($id_santri) {
            $this->db->where('id_santri', $id_santri);
            return $this->db->get('laporan')->result_array();
        }

        function get_laporan_ustadz($id_ustadz) {
            $this->db->where('id_ustadz', $id_ustadz);
            return $this->db->get('laporan')->result_array();
        }

        function update_laporan($id_laporan, $data) {
            $this->db->where('id_laporan', $id_laporan);
            return $this->db->update('laporan', $data);
        }

        function hapus_laporan($id_laporan) {
            $this->db->where('id_laporan', $id_laporan);
            return $this->db->delete('laporan');
        }

    }
