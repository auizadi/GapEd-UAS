<?php

namespace App\Http\Controllers;

use App\Models\dataRegis;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
    

        return view('dashboardAdmin');
    }
}
