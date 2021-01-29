<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

<<<<<<< Updated upstream
    
    function __construct() {
        parent::__construct();
        $this->load->model('Account');
=======
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAccount');
>>>>>>> Stashed changes
    }

    public function index()
    {
        $this->load->view('view');
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
}
<<<<<<< Updated upstream

    public function index()
    {
        $this->load->view('templates/header-login');
        $this->load->view('account/login-regis');
        $this->load->view('templates/footer-login');
    }
}
=======
>>>>>>> Stashed changes
