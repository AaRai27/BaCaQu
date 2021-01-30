<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Santri extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSantri');
    }

    public function index() {
        $this->load->view('templates/header-dashboard');
        // $this->load->view('dashboardUstad');
        $this->load->view('templates/footer');
    }