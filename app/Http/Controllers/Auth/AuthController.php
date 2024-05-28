<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('frontend.auth.login');
    }
    public function login(LoginRequest $r){
        if($r->validated()){
            if(Auth::guard('web')->attempt(['email' => $r->email, 'password' => $r->password])){
                return redirect('home')->with('pesan','Berhasil Login');
            }else{
                return back()->with('pesan','Login Gagal');
            }
        };
    }
    public function daftar(){
        return view('frontend.auth.register');
    }
    public function register(RegisterRequest $r){
        if($r->validated()){
            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ]);

            return redirect('/')->with('pesan', 'Registrasi Berhasil');
        }
    }
}
