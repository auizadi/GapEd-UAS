<?php

namespace App\Http\Controllers;

use App\Models\dataRegis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with(['pesan' => 'email tidak terdaftar!']);
        }

        $password = Hash::check($request->password, $user->password);

        if (!$password) {
            return redirect()->back()->with(['pesan' => 'Password tidak sesuai!']);
        }

        $auth = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($auth) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('');
    }

    public function index() 
    {
        

        return view('loginAdmin');
    }
}
