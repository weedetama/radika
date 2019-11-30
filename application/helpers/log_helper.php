<?php

function status($id)
{
    $ci = get_instance();
    $ci->db->where('id', $id);
    $result = $ci->db->get('tb_invoice')->row_array();
    if ($result['status'] != 0) {
        return "checked='checked'";
    }
}

