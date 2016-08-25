<?php

/**
 *
 * Display flash message
 *
 * @param string $title
 * @param string $message
 * @return void
 *
 */
function flash($title = null, $message = null) {
	$flash = app('App\Http\Services\Flash');

	if (func_num_args() == 0) {
		return $flash;
	}

	return $flash->info($title, $message);
}