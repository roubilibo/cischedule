<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends MY_Model
{
    protected $perPage = 20;

    public function getDefaultValues()
    {
        return [
            'id_mahasiswa'      => '',
            'id_kampus'         => '',
            'nama_lengkap'      => '',
            'nama_panggilan'    => '',
            'nim'               => '',
            'tgl_mulai'         => '',
            'tgl_selesai'       => '',
            'jurusan'           => '',
            'file_foto'         => '',
            'nama_kelompok'     => '',
            'no_hp'             => '',
            'email'             => '',
            'instagram'         => '',
            'file_cv'           => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'id_kampus',
                'label' => 'Kampus',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_lengkap',
                'label' => 'Nama lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_panggilan',
                'label' => 'Nama panggilan',
                'rules' => 'required'
            ],
            [
                'field' => 'nim',
                'label' => 'NIM',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_mulai',
                'label' => 'Mulai',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_selesai',
                'label' => 'selesai',
                'rules' => 'required'
            ],
            [
                'field' => 'jurusan',
                'label' => 'Jurusan',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_kelompok',
                'label' => 'Nama kelompok',
                'rules' => 'required'
            ],
            [
                'field' => 'no_hp',
                'label' => 'No handphone',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'instagram',
                'label' => 'Instagram',
                'rules' => 'required'
            ],
        ];

        return $validationRules;
    }
}

/* End of file Mahasiswa_model.php */