<?php

namespace App\Http\Controllers;

use App\Models\tamu_satgas;
use App\Models\TamuSatgas;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('landing.register', [         
        ]);
    }
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:100',
                'nim' => 'required|string|max:20|unique:tamu_satgas',
                'email' => 'required|string|email:dns|max:100|unique:tamu_satgas',
                'password' => 'required|string|max:100',
                'prodi' => 'required|string|max:100',
            ]);

            // $data = $request->all();
            // $data['password'] = bcrypt($data['password']);
            // $user = tamu_satgas::create($data);
            // event(new Registered($user));

            
            $user = new TamuSatgas();
            $user -> nama = $request->nama;
            $user -> nim = $request-> nim;
            $user -> email = $request-> email;
            $user -> password = Hash::make($request->password);
            $user -> prodi = $request->prodi;
            
            $user->save();
            // dd($user);
            

           return redirect('/index');
        }

        public function login()
        {
            return view('landing.login');
        }
        public function create(Request $request)
        {
            $credentials = $request->validate([
                'nim' => 'required',
                'password' => 'required',
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect('/index');
            }else{
                return redirect('/login');
            }
        
        }

        public function processLogout(Request $request)
        {
            Auth::logout();
            return redirect('/login');
        }
}
