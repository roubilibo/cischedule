<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends MY_Model
{

    protected $table = 'user';

    public function getDefaultValues()
    {
        return [
            'name'      => '',
            'password'  => '',
            'role'      => '',
            'is_active' => ''
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Username',
                'rules' => 'trim|required',
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
            ],
            [
                'field' => 'password_confirmation',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
            ],
        ];

        return $validationRules;
    }

    public function run($input)
    {
        $data       = [
            'name'      => $input->name,
            'password'  => hashEncrypt($input->password),
            'role'      => 'member'
        ];

        $user       = $this->create($data);

        $sess_data  = [

            'id'        => $user,
            'name'      => $data['name'],
            'role'      => $data['role'],
            'is_login'  => true
        ];

        $this->session->set_userdata($sess_data);
        return true;
    }
}

/* End of file Register_model.php */