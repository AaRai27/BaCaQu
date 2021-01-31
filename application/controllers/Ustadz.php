<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan');
        $this->load->model('ModelSantri');
        $this->load->model('ModelUstadz');
    }

    public function index()
    {
        $data['user'] = $this->ModelUstadz->get_akun_id($this->session->userdata('id'));
        $data['santri'] = $this->ModelSantri->get_all_by_ustadz($this->session->userdata('id'));
        $data['laporan'] = $this->ModelLaporan->get_laporan_ustadz($this->session->userdata('id'));

            $this->load->view('templates/header-dashboard');
            $this->load->view('dashboardUstad', $data);
            $this->load->view('templates/footer');
    }

    public function set_ustadz()
    {
        $data_ustadz = array(
            'id_ustadz' => $this->session->id,
            'nama' => $this->input->post('nama', true),
            'deskripsi' => $this->input->post('link', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek = $this->ModelUstadz->daftar($data_ustadz);

        if ($cek) {
            $this->session->set_flashdata('setting_profil', 'sukses');
        } else {
            $this->session->set_flashdata('setting_profil', 'gagal');
        }
        redirect('ustadz', 'refresh');
    }

    public function claim_santri()
    {
        $id_santri = $this->input->post('id', true);
        $data = array('id_ustadz' => $this->session->userdata('id'));
        $cek = $this->ModelSantri->update_akun($id_santri, $data);
        if ($cek) {
            // $this->session->set_flashdata('claim', 'sukses');
        } else {
            // $this->session->set_flashdata('claim', 'gagal');
        }
        redirect('ustadz', 'refresh');
    }

    public function levelup_santri($id_santri)
    {
        $row = $this->ModelSantri->get_akun_id($id_santri);
        $data = array('level' => $row['level'] + 1);
        $cek = $this->ModelSantri->update_akun($id_santri, $data);
        if ($cek) {
            $this->session->set_flashdata('levelup', 'sukses');
        } else {
            $this->session->set_flashdata('levelup', 'gagal');
        }
        redirect('ustadz', 'refresh');
    }
}
