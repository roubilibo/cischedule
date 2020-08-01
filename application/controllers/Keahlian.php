<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keahlian extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index($page = null)
    {
        $data['title']      = 'Admin Keahlian';
        $data['content']    = $this->keahlian->paginate($page)->get();
        $data['total_rows'] = $this->keahlian->count();
        $data['pagination'] = $this->keahlian->makePagination(base_url('keahlian'), 2, $data['total_rows']);
        $data['page']       = 'pages/keahlian/index';

        $this->view($data);
    }

    public function create()
    {
        if (!$_POST) {
            $input  = (object) $this->keahlian->getDefaultValues();
        } else {
            $input  = (object) $this->input->post(null, true);
        }
        if (!$this->keahlian->validate()) {
            $data['title']          = 'Tambah Keahlian';
            $data['input']          = $input;
            $data['form_action']    = base_url('keahlian/create');
            $data['page']           = 'pages/keahlian/form';

            $this->view($data);
            return;
        }

        if ($this->keahlian->create($input)) {

            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        } else {

            $this->session->set_flashdata('error', 'Terjadi kesalahan!');
        }

        redirect(base_url('keahlian'));
    }

    public function edit($id_keahlian)
    {
        $data['content']    = $this->keahlian->where('id_keahlian', $id_keahlian)->first();

        if (!$data['content']) {
            $this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan');
            redirect(base_url('keahlian'));
        }

        if (!$_POST) {
            $data['input']  = $data['content'];
        } else {
            $data['input']  = (object) $this->input->post(null, true);
        }

        if (!$this->keahlian->validate()) {
            $data['title']          = 'Ubah Keahlian';
            $data['form_action']    = base_url("keahlian/edit/$id_keahlian");
            $data['page']           = 'pages/keahlian/form';

            $this->view($data);
            return;
        }

        if ($this->keahlian->where('id_keahlian', $id_keahlian)->update($data['input'])) {
            $this->session->set_flashdata('success', 'Data berhasil diperbaharui');
        } else {

            $this->session->set_flashdata('error', 'Terjadi kesalahan');
        }

        redirect(base_url('keahlian'));
    }

    public function delete($id_keahlian)
    {
        if (!$_POST) {
            redirect(base_url('keahlian'));
        }


        if (!$this->keahlian->where('id_keahlian', $id_keahlian)->first()) {
            $this->session->set_flashdata('warning', 'Maaf! Data tidak ditemukan');
            redirect(base_url('keahlian'));
        }

        if ($this->keahlian->where('id_keahlian', $id_keahlian)->delete()) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Terjadi kesalahan');
        }

        redirect(base_url('keahlian'));
    }
}

/* End of file Kampus.php */