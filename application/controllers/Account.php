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

    public function signin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('account');
        } else {
            $this->_login();
            $this->session->set_flashdata('register', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('account', ['username' => $username])->row_array();

        if ($user) {
            if ($password == $user['password']) { //password_verify($password, $user['password'])
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 1) {
                    redirect('ustadz');
                } else {
                    redirect('santri');
                }
            } else {
                $this->session->set_flashdata('register', '<div class="alert alert-danger" role="alert">Wrong Username/Password</div>');
                redirect('account');
            }
        } else {
            $this->session->set_flashdata('register', '<div class="alert alert-danger" role="alert">You are not an admin</div>');
            redirect('account');
        }
    }


    // public function login()
    // {
    //     $username = $this->input->post('username', true);
    //     $password = $this->input->post('password', true);
    //     $masuk = $this->ModelAccount->login($username, $password);
    //     if ($masuk) {
    //         $row = $this->ModelAccount->get_akun_username($username);
    //         $userdata = array(
    //             'username' => $username,
    //             'id' => $row['user_id'],
    //             'logged in' => true
    //         );
    //         $this->session->set_userdata($userdata);
    //         if ($row['role'] == 1) {
    //             $this->load->view('templates/header-dashboard');
    //             $this->load->view('dashboardUstad');
    //             $this->load->view('templates/footer');
    //         } else {
    //             redirect('report');
    //         }
    //     } else {
    //         redirect('account');
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('register', '<div class="alert alert-success" role="alert">You have been logged out</div>');
        // redirect('auth');
        redirect('account');
    }

    public function daftar()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[account.username]');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password1', 'Confirmation Password', 'required|matches[password]');


        $role = $this->input->post('role', true);
        if ($role == 1) {
            $next_id = $this->ModelAccount->count_ustadz() + 1;
            $role = 1;
            $data = array(
                'user_id' => 'u-' . $next_id,
                'username' => $this->input->post('username', true),
                'password' => $this->input->post('password', true),
                'role' => $role
            );
        } else {
            $next_id = $this->ModelAccount->count_santri() + 1;
            $role = 2;
            $data = array(
                'user_id' => 's-' . $next_id,
                'username' => $this->input->post('username', true),
                'password' => $this->input->post('password', true),
                'role' => $role
            );
        }

        $cek_username = $this->ModelAccount->cek_username($data['username']);
        if (!$cek_username) {
            $cek = $this->ModelAccount->daftar($data);
        } else {
            $cek = false;
        }

        if ($cek) {
            $this->session->set_flashdata('register', '<div class="alert alert-success alert-dismissible fade show" role="alert">Akun Berhasil Dibuat<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        } else {
            $this->session->set_flashdata('register', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Akun Gagal Dibuat<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </div>');
        }
        redirect('account');
    }

    // public function daftar_ustadz()
    // {
    //     $next_id = $this->ModelAccount->count_ustadz() + 1;
    //     $data = array(
    //         'user_id' => 'u' . $next_id,
    //         'username' => $this->input->post('username', true),
    //         'password' => $this->input->post('password', true),
    //         'role' => 1
    //     );

    //     $cek1 = $this->ModelAccount->daftar($data);

    //     $data_ustadz = array(
    //         'id_ustadz' => $data['user_id'],
    //         'nama' => $this->input->post('nama', true),
    //         'deskripsi' => $this->input->post('link', true),
    //         'telepon' => $this->input->post('telepon', true)
    //     );
    //     $cek2 = $this->ModelUstadz->daftar($data_ustadz);

    //     if ($cek1 and $cek2) {
    //         $this->session->set_flashdata('daftar', 'sukses');
    //     } else {
    //         $this->session->set_flashdata('daftar', 'gagal');
    //     }
    // }


    // public function daftar_santri()
    // {
    //     $next_id = $this->ModelAccount->count_santri() + 1;
    //     $data = array(
    //         'user_id' => 's' . $next_id,
    //         'username' => $this->input->post('username', true),
    //         'password' => $this->input->post('password', true),
    //         'role' => 2
    //     );
    //     $cek1 = $this->ModelAccount->daftar($data);

    //     $data_santri = array(
    //         'id_santri' => $data['user_id'],
    //         'id_ustadz' => '',
    //         'nama' => $this->input->post('nama', true),
    //         'level' => $this->input->post('level', true),
    //         'telepon' => $this->input->post('telepon', true)
    //     );
    //     $cek2 = $this->ModelSantri->daftar($data_santri);

    //     if ($cek1 and $cek2) {
    //         $this->session->set_flashdata('daftar', 'sukses');
    //         // redirect home
    //     } else {
    //         // register gagal
    //     }
    // }


    public function update_akun_santri($id_santri)
    {
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

    public function update_akun_ustadz($id_ustadz)
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'deskripsi' =>$this->input->post('link', true),
            'telepon' => $this->input->post('telepon', true)
        );
        $cek = $this->ModelUstadz->update_akun($id_ustadz, $data);
        if ($cek) {
            // flash data kalo sukses
        } else {
            // flash data kalo gagal
        }
        redirect('ustadz', 'refresh');
    }

    public function hapus_akun_santri($id_santri)
    {
        $this->ModelSantri->delete_akun($id_santri);
        // pake flash data?
        redirect(base_url());
    }

    public function hapus_akun_ustadz($id_ustadz)
    {
        $this->ModelUstadz->delete_akun($id_ustadz);
        // pake flash data?
        redirect(base_url());
    }
}
