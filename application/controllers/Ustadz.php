<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan');
        $this->load->model('ModelSantri');
    }

    public function index()
    {
        $data['user'] = $this->ModelUstadz->get_akun_id($this->session->userdata('id'));
        $data['santri'] = $this->ModelSantri->get_all_by_ustadz($this->session->userdata('id'));
        $data['laporan'] = $this->ModelLaporan->get_laporan_ustadz($this->session->userdsata('id'));

        if ($data['user']) {
            $this->load->view('templates/header-dashboard');
            $this->load->view('dashboardUstad', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('account');
        }
    }

    public function claim_santri($id_santri)
    {
        $data = array('id_ustadz' => $this->session->userdata('id'));
        $cek = $this->ModelSantri->update_akun($id_santri, $data);
        if ($cek) {
            $this->session->set_flashdata('claim', 'sukses');
        } else {
            $this->session->set_flashdata('claim', 'gagal');
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
