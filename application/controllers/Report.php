<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('ModelQuran');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('homepage');
        $this->load->view('templates/footer');
    }

    public function read_quran($nomor_surat)
    {

        $data['ayat'] = $this->ModelQuran->get_full_ayat($this->uri->segment(3)); //file_get_contents('https://api.npoint.io/99c279bb173a6e28359c/surat/89');
        $dataQuran = file_get_contents('http://api.alquran.cloud/v1/surah');
        // $data['surat'] = json_decode($dataSurat, true);
        $data['quran'] = json_decode($dataQuran, true);
        // $data['ayat'] = $data['surat'];
        $data['surat'] = $data['quran']['data'];

        //     //konfigurasi pagination
        $config['base_url'] = base_url('report/read_quran/' . $nomor_surat); //site url
        $config['total_rows'] = count($data['ayat']); //total row
        $config['per_page'] = 20;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //     // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //     //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data_ayat'] = $this->ModelQuran->get_ayat($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();
        $data['ayat-start'] =  4 + 1;
        $data['ayat-end'] = 4 + 3;

        //     //load view mahasiswa view
        //     $this->load->view('mahasiswa_view',$data);
        // }

        $this->load->view('templates/header');
        $this->load->view('ngaji/quran', $data);
        $this->load->view('templates/footer');
    }

    public function read_iqra()
    {
        // $data['iqra'] = $this->ModelQuran->get_all_iqra();
        $this->load->view('templates/header');
        $this->load->view('ngaji/iqraMenu');
        $this->load->view('templates/footer');
    }

    public function view_iqra($jilid)
    {
        $query = $this->db->query("SELECT halaman FROM iqra");
        // $total = 

        $config['base_url'] = base_url('report/view_iqra/' . $jilid); //site url
        $config['total_rows'] = $query->num_rows();; //$this->db->count_all('produk') //total row
        $config['per_page'] = 1;  //show record per halaman
        $config["uri_segment"] = 4;  // uri parameter
        // $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '<img src="' . base_url('assets/images/arrow.svg') . '" width="15px" alt="">';
        $config['prev_link']        = '<img src="' . base_url('assets/images/arrow.svg') . '" style="transform:rotate(180deg);" width="15px" alt="">';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        //     //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data_ayat'] = $this->ModelQuran->get_ayat($config["per_page"], $data['page']);

        $data['data_iqra'] = $this->ModelQuran->get_iqra($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header');
        $this->load->view('ngaji/iqra', $data);
        $this->load->view('templates/footer');
    }

    // public function buat_laporan() {
    //     $data = array(
    //         'id_ustadz' => $this->input->post('id_ustadz', true),
    //         'id_santri' => $this->input->post('id_santri', true),
    //         'hari_tanggal' => $this->input->post('hari_tanggal', true),
    //         'dibaca' => $this->input->post('dibaca', true),
    //         'keterangan' => $this->input->post('keterangan', true);
    //         'catatan' => $this->input->post('catatan', true)
    //     );
    //     $cek = $this->ModelLaporan->buat_laporan($data);
    //     if ($cek) {
    //         // buat laporan sukses
    //     } else {
    //         // buat laporan gagal
    //     }
    // }


    public function edit_laporan($id_laporan)
    {
        $laporan = $this->ModelLaporan->get_laporan_id($id_laporan);
        $data = array(
            'hari_tanggal' => $this->input->post('hari_tanggal', true),
            'dibaca' => $this->input->post('dibaca', true),
            'keterangan' => $this->input->post('keterangan', true),
            'catatan' => $this->input->post('catatan', true)
        );
        $cek = $this->ModelLaporan->update_laporan($id_laporan, $data);
        if ($cek) {
            // update sukses
        } else {
            // update gagal
        }
    }


    public function hapus_laporan($id_laporan)
    {
        $this->ModelLaporan->delete_laporan($id_laporan);
        // flash data?
        // redirect or refresh
    }
}
