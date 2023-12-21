<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataRegis extends Model
{
    use HasFactory;

    protected $table = 'data_regis';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_lengkap',
        'alamat',
        'nohp',
        'program',
        'lokasi',
        'metode_pembayaran',
    ];

   
}