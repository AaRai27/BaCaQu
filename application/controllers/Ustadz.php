<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSantri');
    }

    public function claim_santri($id_santri)
    {
        // $data = 'id_ustadz' => $this->session->userdata('id');
        // $cek = $this->ModelSantri->update_akun($id_santri, $data);
        // if ($cek) {
        // flash data berhasil
        // refresh dashboard
        // } else {
        // flash data gagal
        // }
    }

    public function levelup_santri($id_santri)
    {
        $row = $this->ModelSantri->get_akun_id($id_santri);
        // $data = 'level' => $row['level'] + 1;
        // $cek = $this->ModelSantri->update_akun($id_santri, $data);
        // if ($cek) {
        // flash data berhasil
        // refresh dashboard
        // } else {
        // flash data gagal
        // }
    }
}
