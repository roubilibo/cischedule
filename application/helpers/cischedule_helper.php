<?php

function getDropdownList($table, $columns)
{
    $CI    = &get_instance();
    $query = $CI->db->select($columns)->from($table)->get();

    if ($query->num_rows() >= 1) {
        $option1 = ['' => '- Select -'];
        $option2 = array_column($query->result_array(), $columns[1], $columns[0]);
        $options = $option1 + $option2;

        return $options;
    }

    return $options = ['' => '- Select -'];
}

function getNamaKampus()
{
    $CI    = &get_instance();
    $query = $CI->db->get('tbl_kampus')->result();
    return $query;
}

function getNamaMahasiswa()
{
    $CI    = &get_instance();
    $query = $CI->db->get('tbl_mahasiswa')->result();
    return $query;
}

function getNamakeahlian()
{
    $CI    = &get_instance();
    $query = $CI->db->get('tbl_keahlian')->result();
    return $query;
}

function hashEncrypt($input)
{
    $hash   = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

function hashEncryptVerify($input, $hash)
{
    if (password_verify($input, $hash)) {
        return true;
    } else {
        return false;
    }
}