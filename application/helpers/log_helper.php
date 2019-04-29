<?php

function is_logged_out()
{
    $ci = get_instance();
    if ($ci->session->userdata('email')) {
        redirect('dashboard');
    }
}
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $userAccess = $ci->db->get_where('user', [
            'groub' => 1
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('er');
        }
    }
}