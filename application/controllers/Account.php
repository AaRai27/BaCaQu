<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Account');
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelAccount');
    }

    public function index()
    {
        $this->load->view('templates/header-login');
        $this->load->view('account/login-regis');
        $this->load->view('templates/footer-login');
    }

    public function login() {
        $username = $this->input->post('username', true),
        $password = $this->input->post('password', true)
        $masuk = $this->Account->login($username, $password);
        if ($masuk) {
            $this->session->set_userdata('username', $username);
            redirect(base_url());
        } else {
            redirect('account/index');
        }
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
    

