<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kampus extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index($page = null)
    {
        $data['title']      = 'Admin Kampus';
        $data['content']    = $this->kampus->paginate($page)->get();
        $data['total_rows'] = $this->kampus->count();
        $data['pagination'] = $this->kampus->makePagination(base_url('kampus'), 2, $data['total_rows']);
        $data['page']       = 'pages/kampus/index';

        $this->view($data);
    }

    public function create()
    {
        if (!$_POST) {
            $input  = (object) $this->kampus->getDefaultValues();
        } else {
            $input  = (object) $this->input->post(null, true);
        }
        if (!$this->kampus->validate()) {
            $data['title']          = 'Tambah Kampus';
            $data['input']          = $input;
            $data['form_action']    = base_url('kampus/create');
            $data['page']           = 'pages/kampus/form';

            $this->view($data);
            return;
        }

        if ($this->kampus->create($input)) {

            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        } else {

            $this->session->set_flashdata('error', 'Terjadi kesalahan!');
        }

        redirect(base_url('kampus'));
    }
}

/* End of file Kampus.php */