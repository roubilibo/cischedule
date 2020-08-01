<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends MY_Model
{

    protected $table = 'user';

    public function getDefaultValues()
    {
        return [
            'name'     => '',
            'password'  => '',
        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'name',
                'label' => 'Username',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ]
        ];

        return $validationRules;
    }

    public function run($input)
    {
        $query  = $this->where('name', strtolower($input->name))
            ->where('is_active', 1)
            ->first();

        if (!empty($query)) {
            $sess_data = [
                'id'        => $query->id,
                'name'      => $query->name,
                'role'      => $query->role,
                'is_login'  => true,
            ];
            $this->session->set_userdata($sess_data);
            return true;
        }

        if (!empty($query) && hashEncryptVerify($input->password, $query->password)) {
            $sess_data = [
                'id'        => $query->id,
                'name'      => $query->name,
                'role'      => $query->role,
                'is_login'  => true,
            ];
            $this->session->set_userdata($sess_data);
            return true;
        }

        return false;
    }
}

/* End of file Login_model.php */