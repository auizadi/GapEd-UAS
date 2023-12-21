<?php

namespace App\Http\Controllers;

use App\Models\dataRegis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class formController extends Controller
{
    public function index() 
    {
        return view('form');
    }

    public function storeform(Request $request)
    {
        
        $store = new dataRegis();

        $store -> nama_lengkap = $request -> nama_lengkap;
        $store -> alamat = $request -> alamat;
        $store -> nohp = $request -> nohp;
        $store -> program = $request -> program;
        $store -> lokasi = $request -> lokasi;
        $store -> metode_pembayaran = $request -> metode_pembayaran;

        $store->save();

        return redirect()->back()->with('pesan', 'Pendaftaran Berhasil');
    }
}
