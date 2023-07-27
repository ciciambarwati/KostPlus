<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('pelanggan/index');
    }

    public function favorit()
    {
        return view('pelanggan/favorit');
    }

    public function deskripsi()
    {
        return view('pelanggan/deskripsi');
    }

    public function peraturan()
    {
        return view('pelanggan/peraturan');
    }

    public function fasilitas()
    {
        return view('pelanggan/fasilitas');
    }

    public function sewa()
    {
        return view('pelanggan/sewa');
    }

    public function register()
    {
        $data['title'] = 'Register';
        return view('login/reg', $data);
    }

    public function register_action(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $register = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        // var_dump($register);
        return redirect()->route('index');

        // Users::create($data);

        // $infologin = [
        //     'email' => $request->email,
        //     'password'=> $request->password,
        // ];
        // if(Auth::attempt($infologin)){
        //     // Jika sukses
        //     return redirect()->route('index');
        // } else {
        //     //jika gagal
        //     // var_dump($login);
        //     return redirect('register')->withErrors('Username dan password yang anda masukan tidak valid')->withInput;
        // }

        // $user = new User([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        // $register->save();
        // var_dump($register);
        // return redirect()->route('index');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('login/form_login', $data);
    }

    public function login_action(Request $request)
    {
        Session::flash('email', $request->email);
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            // Jika sukses
            return redirect()->route('index');
        } else {
            //jika gagal
            // var_dump($login);
            return redirect('login')->withErrors('Username dan password yang anda masukan tidak valid')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Berhasil Logout');
    }
}
