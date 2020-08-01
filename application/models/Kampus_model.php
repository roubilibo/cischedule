<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kampus_model extends MY_Model
{
    protected $perPage = 15;

    public function getDefaultValues()
    {
        return [
            'id_kampus'     => '',
            'nama_kampus'   => '',
            'kota_kampus'   => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field'     => 'nama_kampus',
                'label'     => 'Nama Kampus',
                'rules'     => 'required'
            ],
            [
                'field'     => 'kota_kampus',
                'label'     => 'Kota Kampus',
                'rules'     => 'required'
            ]
        ];
        return $validationRules;
    }
}

/* End of file Kampus_model.php */