<?php

namespace App\Http\Controllers;
use App\Post;

class DashController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getDashboard() {
		$posts = Post::orderBy('created_at', 'desc')->get();
		return view('dashboard', ['posts' => $posts]);
	}
}
