<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('homepage');
        $this->load->view('templates/footer');
    }

    public function read_quran()
    {
        $this->load->view('templates/header');
        $this->load->view('ngaji/quran');
        $this->load->view('templates/footer');
    }
}
