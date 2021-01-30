<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLaporan');
        $this->load->model('ModelSantri');
        $this->load->model('ModelUstadz');
    }

    public function index() {
        $data['user'] = $this->ModelSantri->get_akun_id($this->session->userdata('id'));
        $tmp = $data['user']
        $data['ustadz'] = $this->ModelUstadz->get_akun_id($tmp['id_ustadz']);
        $data['laporan'] = $this->ModelLaporan->get_laporan_santri($this->session->userdata('id'));

        $this->load->view('templates/header-dashboard');
        $this->load->view('dashboardSantri', $data);
        $this->load->view('templates/footer');
    }