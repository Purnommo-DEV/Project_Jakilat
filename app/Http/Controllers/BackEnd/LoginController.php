<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email','password','role'))){
            if (auth()->user()->role == 'Customer') {
                return redirect()->route('berandaCustomer');
            } 
            elseif (auth()->user()->role == 'Member') {
                return redirect()->route('berandaMember');
            }
            elseif (auth()->user()->role == 'Admin') {
                return redirect()->route('berandaAdmin');
            }
            elseif (auth()->user()->role == 'SuperAdmin') {
                return redirect()->route('berandaSuperAdmin');
            }
        }else{
            toast('Gagal Login, <br> <small>Cek kembali Email, Password dan Jenis akun anda</small>','error');
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        return redirect('/');
    }
}
