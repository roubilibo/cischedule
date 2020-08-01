<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index($page = null)
    {
        $data['title']          = 'Admin Mahasiswa';
        $data['content']        = $this->mahasiswa->select(
            [
                'mahasiswa.id_mahasiswa',
                'mahasiswa.nama_lengkap', 'mahasiswa.nim', 'mahasiswa.nama_kelompok',
                'mahasiswa.tgl_mulai', 'mahasiswa.tgl_selesai',
                'kampus.nama_kampus',
                'keahlianmahasiswa.nilai', 'keahlian.nama_keahlian'
            ]
        )
            ->join('keahlianmahasiswa')->join('keahlian')->join('kampus')
            ->paginate($page)
            ->get();
        $data['total_rows'] = $this->mahasiswa->count();
        $data['pagination'] = $this->mahasiswa->makePagination(
            base_url('mahasiswa'),
            2,
            $data['total_rows']
        );
        $data['page']       = 'pages/mahasiswa/index';

        $this->view($data);
    }
}

/* End of file Mahasiswa.php */