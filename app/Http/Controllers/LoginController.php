<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('landing.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nim' => "required",
            'password' => "required"
        ]);
    }
}
