<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function post_login(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if(Auth::Attempt($data)){
            session(['email' => $request->email]);
            return redirect('/');
        }else {
            echo "<script>alert('Username dan Password salah, Silahkan coba lagi!')</script>";
            return redirect('/login');
          }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
