<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\produk;
use App\Models\user;
use App\Models\detailtransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome',compact('data'));
    }

    public function detailtransaksi(Request $request, produk $produk)
    {
        return view('detailtransaksi',compact('produk'));
    }

    public function login()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function postdaftar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nama' => 'required'
        ]);

        user::create([
            'email' => $request->email,
            'password' => $request->password,
            'nama' => $request->nama,
            'role' => 'user'
        ]);
        
        return redirect()->route('login')->with('Data User Berhasil Di simpan');
    }

    public function masuklogin(Request $request)
    {
        $cek=$request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($cek)) {
            $user=Auth::user();
            if ($user->role=='admin') {
                
            }else{
                return redirect()->route('home')->with('status', 'Selamat Datang'.$user->nama);
            }
            return back()->with('status', 'Maaf Username Atau Password Salah..!');
        }
    }

    public function logout()
    {
        Auth()->logout();
        return redirect()->route('home');
    }
}
