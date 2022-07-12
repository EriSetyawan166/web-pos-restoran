<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()){

            return redirect()->intended('admin\dashboard');
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        // @dd($request->all());

        // request()->validate(
        //     [
        //         'username' => 'required',
        //         'password' => 'required',
        //     ]
        // );




        $ceklogin = $request->only('username', 'password');
            if (Auth::attempt($ceklogin)){

                $session = User::all()->where('username', $request->username)->first();



                $request->session()->regenerate();
                session([
                    'nama' => $session->nama,
                    'nip' => $session->nip,
                    'role_user'=> $session->role_id,
                ]);

                // @dd($session->username);


                if ($session->role_id == 1) {
                    return redirect()->intended('admin\dashboard')->with('success', "Selamat Datang ". $session->username);
                } else{
                    return redirect()->intended('kasir\dashboard')->with('success', "Selamat Datang ". $session->nama);
                }

            }

        return redirect('login')->with('flash_message_error', 'Username atau Password Anda Salah!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

    public function username()
    {
        return 'username';
    }
}
