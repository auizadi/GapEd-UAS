<?php

namespace App\Http\Controllers;

use App\Models\dataRegis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class formController extends Controller
{
    public function storeform(Request $request)
    {
        // Pengecekan jika tidak ada mahasiswa yang sedang login
        
        $program = dataRegis::all();
        return view('dashboardAdmin', compact('program'));
        // Masukkan semua data yg dikirim ke variable $data
        $data = $request->all();

        // Buat variable $validate kemudian isinya Validator::make(datanya, [nama_field => peraturannya])
        $validate = Validator::make($data, [
            'nama_lengkap' => ['required'],
            'alamat' => ['required'],
            'nohp' => ['required'],
            'program' => ['required'],
            'lokasi' => ['required'],
            'metode_pembayaran' => ['required'],
        ]);

        // Pengecekan jika validate fails atau gagal
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        

        
        // Membuat variable $pengaduan isinya Memasukkan data kedalam table Pengaduan
        $dataRegis = dataRegis::create([
            

            'nama_lengkap' => $data['nama_lengkap'],
            'alamat' => $data['alamat'],
            'nohp' => $data['nohp'],
            'program' => $data['program'],
            'lokasi' => $data['lokasi'],
            'metode_pembayaran' => $data['metode_pembayaran'],
            
        ]);

        // Pengecekan variable $pengaduan
        if ($dataRegis) {
            // Jika mengirim pengaduan berhasil
            return redirect()->route('selamat')->with(['success' => 'Berhasil terkirim!']);
        } else {
            // Jika mengirim pengaduan gagal
            return redirect()->back()->with(['danger' => 'Gagal terkirim!']);
        }
    }
}
