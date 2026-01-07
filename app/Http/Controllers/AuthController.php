<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if($email == null || $password == null){
            return redirect('/login');
        }

        if(Auth::attempt([
            'email' => $email,
            'password' => $password
            ])){
                return redirect('/dashboard');
            }else{  
                return redirect('login');
            }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request){
        $nama = $request->name;
        $email = $request->email;
        $password = $request->password;

        if(!$nama || !$email || !$password){
            return redirect('/register');
        }

        User::create([
            'name' => $nama,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        return redirect('/login');
    }
}
