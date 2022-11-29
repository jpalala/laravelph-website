<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function home() {
	   return 'home';
	}

	public function dashboard() {
	   return 'dashboard';
	}
	public function profile() {
	   return 'profile';
	}
}
