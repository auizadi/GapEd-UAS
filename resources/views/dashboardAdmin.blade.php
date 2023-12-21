@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            
              <h1>Data Pendaftar</h1>
              <br>
                <table id="pengaduanTable" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Program</th>
                            <th>Lokasi</th>
                            <th>Metode Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>dani</td>
                            <td>Gilang</td>
                            <td>081907429076</td>
                            <td>Reguler</td>
                            <td>Ketintang</td>
                            <td>BCA</td>
                        </tr>
                        
                    </tbody>
                </table>
            
        </div>
        
@endsection
