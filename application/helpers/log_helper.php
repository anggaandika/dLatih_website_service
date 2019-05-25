<?php

function is_logged_in()
{
	$ci = get_instance();
	if (!$ci->session->userdata('email')) {
		redirect('');
	} else {
		$userAccess = $ci->db->get_where('user', [
			'groub' => 1
		]);

		if ($userAccess->num_rows() < "1") {
			redirect('er');
		}
	}
}