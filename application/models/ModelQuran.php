<?php

class ModelQuran extends CI_Model
{
    public function get_full_ayat($nomor_surat)
    {
        $dataSurat = file_get_contents('https://api.npoint.io/99c279bb173a6e28359c/surat/' . $nomor_surat);
        // $dataQuran = file_get_contents('https://api.npoint.io/99c279bb173a6e28359c/data');
        $data['surat'] = json_decode($dataSurat, true);
        // $data['quran'] = json_decode($dataQuran, true);
        $full_ayat = $data['surat'];
        // $data['surat'] = $data['quran'];

        // $query = array_slice($data['ayat'], $start, $limit);
        return $full_ayat;
    }

    public function get_ayat($limit, $start)
    {
        $nomor_surat = $this->uri->segment(3);
        $dataSurat = file_get_contents('https://api.npoint.io/99c279bb173a6e28359c/surat/' . $nomor_surat);
        // $dataQuran = file_get_contents('https://api.npoint.io/99c279bb173a6e28359c/data');
        $data['surat'] = json_decode($dataSurat, true);
        // $data['quran'] = json_decode($dataQuran, true);
        $data['ayat'] = $data['surat'];
        // $data['surat'] = $data['quran'];

        $query = array_slice($data['ayat'], $start, $limit);
        return $query;
    }

    public function get_nama_surat($nomor)
    {
    }
}
