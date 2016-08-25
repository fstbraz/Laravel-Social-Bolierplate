<?php

namespace App\Http\Services;

class Flash {

	/**
	 *
	 * Create a flash message
	 * @param = string $title
	 * @param = string $message
	 * @param = string $level
	 * @param = string|null $key
	 * @return void
	 *
	 */
	public function create($title, $message, $level, $time, $key = 'flash_message') {
		session()->flash($key, [
			'title' => $title,
			'message' => $message,
			'level' => $level,
			'time' => $time
		]);
	}

	/**
	 *
	 * Create an information flash message
	 * @param = string $title
	 * @param = string $message
	 * @return = void
	 *
	 */
	public function info($title, $message) {
		return $this->create($title, $message, 'info', 1800);
	}

	/**
	 *
	 * Create an sucess flash message
	 * @param = string $title
	 * @param = string $message
	 * @return = void
	 *
	 */
	public function success($title, $message) {
		return $this->create($title, $message, 'success', 1800);
	}

	/**
	 *
	 * Create an error flash message
	 * @param = string $title
	 * @param = string $message
	 * @return = void
	 *
	 */
	public function error($title, $message) {
		return $this->create($title, $message, 'error', 1800);
	}

	/**
	 *
	 * Create an overlay flash message
	 * @param = string $title
	 * @param = string $message
	 * @param = string|null $level
	 * @param = string|null $level
	 * @return = void
	 *
	 */
	public function overlay($title, $message, $level = 'success', $time = 1800) {
		return $this->create($title, $message, $level, $time, 'flash_message_overlay');
	}

}