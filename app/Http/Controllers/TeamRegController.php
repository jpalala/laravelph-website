<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamRegController extends Controller
{


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
   }
    
    public function register() {
	return view('team_register');
    }

  protected function create(array $data)
  {
    return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'moderator',
            'password' => bcrypt($data['password']),
    ]);
  }
}
