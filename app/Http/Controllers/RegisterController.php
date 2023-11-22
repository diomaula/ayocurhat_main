<?php

// namespace App\Http\Controllers;

// use App\Models\tamu_satgas;
// use Illuminate\Http\Request;

// class RegisterController extends Controller
// {
//     public function register()
//     {
//         return view('landing.register', [
//             'title' => 'registrasi'
//         ]);
//     }

//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'uname' => 'required|max:255',
//             'nim' => 'required|max:13|unique:tamu_satgas',
//             'email' => 'required|email:dns|unique:tamu_satgas',
//             'password' => 'required|min:6|max:255',
//             'prodi' => 'required|max:255'
//         ]);

//         tamu_satgas::create($validatedData);

//     }
// }
