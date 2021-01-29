<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    unction __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('homepage');
        $this->load->view('templates/footer');
    }

    public function read_quran()
    {
        $this->load->view('templates/header');
        $this->load->view('ngaji/quran');
        $this->load->view('templates/footer');
    }

    public function buat_laporan() {
        $data = array(
            'id_ustadz' => $this->input->post('id_ustadz', true),
            'id_santri' => $this->input->post('id_santri', true),
            'hari_tanggal' => $this->input->post('hari_tanggal', true),
            'dibaca' => $this->input->post('dibaca', true),
            'keterangan' => $this->input->post('keterangan', true);
            'catatan' => $this->input->post('catatan', true)
        );
        $cek = $this->ModelLaporan->buat_laporan($data);
        if ($cek) {
            // buat laporan sukses
        } else {
            // buat laporan gagal
        }
    }

    public function edit_laporan($id_laporan) {
        $laporan = $this->ModelLaporan->get_laporan_id($id_laporan);
        $data = array(
            'hari_tanggal' => $this->input->post('hari_tanggal', true),
            'dibaca' => $this->input->post('dibaca', true),
            'keterangan' => $this->input->post('keterangan', true),
            'catatan' => $this->input->post('catatan', true)
        );
        $cek = $this->ModelLaporan->update_laporan($id_laporan, $data);
        if ($cek) {
            // update sukses
        } else {
            // update gagal
        }
    }

    public function hapus_laporan($id_laporan) {
        $this->ModelLaporan->delete_laporan($id_laporan);
        // flash data?
        // redirect or refresh
    }
}
