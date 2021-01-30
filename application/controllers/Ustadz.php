<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSantri');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('account', ['username' => $this->session->userdata('username')])->row_array();

        if ($data['user']) {
            $this->load->view('templates/header-dashboard');
            $this->load->view('dashboardUstad');
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
