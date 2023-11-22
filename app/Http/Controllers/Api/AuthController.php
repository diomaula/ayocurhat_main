<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\HasApiTokens;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginData = $request->validate([
            "nim" => "required",
            "password" => "required",
        ]);

        if (!auth()->attempt($loginData)) {
            return response()->json([
                'status' => false,
                'message' => 'login atau password salah',
            ]);
        }

        $token = auth()->user()->createToken('auth_token');
        return response()->json([
            'status' => true,
            'message' => 'Login berhasil',
            'access_token' => $token,
        ]);
    }
}