<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAccount');
        $this->load->model('ModelSantri');
        $this->load->model('ModelUstadz');
    }

    public function index()
    {
        $this->load->view('templates/header-login');
        $this->load->view('account/login-regis');
        $this->load->view('templates/footer-login');
    }

    public function login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $masuk = $this->ModelAccount->login($username, $password);
        if ($masuk) {
            $this->session->set_userdata('username', $username);
            redirect('report');
        } else {
            redirect('account');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function daftar_ustadz() {
        $next_id = $this->ModelAccount->count_ustadz() + 1;
        $data = array(
            'user_id' => 'u'.$next_id,
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'role' => 1
        );       
        $cek1 = $this->ModelAccount->daftar($data);

        $data_ustadz = array(
            'id_ustadz' => $data['user_id'],
            'nama' => $this->input->post('nama', true),
            'deskripsi' => $this->input->post('link', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek2 = $this->ModelUstadz->daftar($data_ustadz);

        if ($cek1 and $cek2) {
            // register sukses (kasih flash data juga boleh)
            // redirect home
        } else {
            // register gagal
        }
    }

    public function daftar_santri() {
        $next_id = $this->ModelAccount->count_santri() + 1;
        $data = array(
            'user_id' => 's'.$next_id,
            'username' => $this->input->post('username', true),
            'password' => $this->input->post('password', true),
            'role' => 2
        );
        $cek1 = $this->ModelAccount->daftar($data);

        $data_santri = array(
            'id_santri' => $data['user_id'],
            'id_ustadz' => '',
            'nama' => $this->input->post('nama', true),
            'level' => $this->input->post('level', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek2 = $this->ModelSantri->daftar($data_santri);

        if ($cek1 and $cek2) {
            // register sukses (kasih flash data juga boleh)
            // redirect home
        } else {
            // register gagal
        }
    }

    public function update_akun_santri($id_santri) {
        $santri = $this->ModelSantri->get_akun_id($id_santri);
        $data = array(
            'nama' => $this->input->post('nama', true),
            'level' => $this->input->post('level', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek = $this->ModelSantri->update_akun($id_santri, $data);
        if ($cek) {
            // flash data kalo sukses
        } else {
            // flash data kalo gagal
        }
        // redirect to profil atau dashboard santri
    }

    public function update_akun_santri($id_ustadz) {
        $ustadz = $this->ModelUstadz->get_akun_id($id_ustadz);
        $data = array(
            'nama' => $this->input->post('nama', true),
            'deskripsi' => $this->input->post('link', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek = $this->ModelUstadz->update_akun($id_ustadz, $data);
        if ($cek) {
            // flash data kalo sukses
        } else {
            // flash data kalo gagal
        }
        // redirect to dashboard ustadz
    }

    public function hapus_akun_santri($id_santri) {
        $this->ModelSantri->delete_akun($id_santri);
        // pake flash data?
        redirect(base_url());
    }

    public function hapus_akun_ustadz($id_ustadz) {
        $this->ModelUstadz->delete_akun($id_ustadz);
        // pake flash data?
        redirect(base_url());
    }
}
