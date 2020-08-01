<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keahlian_model extends MY_Model
{
    protected $perPage = 15;

    public function getDefaultValues()
    {
        return [
            'id_keahlian'     => '',
            'nama_keahlian'   => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field'     => 'nama_keahlian',
                'label'     => 'Nama Keahlian',
                'rules'     => 'required'
            ]
        ];
        return $validationRules;
    }
}

/* End of file Kampus_model.php */