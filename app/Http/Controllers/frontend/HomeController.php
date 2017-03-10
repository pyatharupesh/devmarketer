<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
	public function index() {
		return view('welcome');
	}

	public function contact() {
		return view('contact');
	}
	public function about() {
		return view('about');
	}
}
