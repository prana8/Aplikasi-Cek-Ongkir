<?php

namespace App\Http\Controllers;

use App\Models\kota;
use App\Models\kurir;
use App\Models\provinsi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(){
        $provinsi = $this->getprovinsi();
        $kurir = $this->getkurir();
        return view('dashboard', compact('provinsi'), compact('kurir'));
    }

    public function getprovinsi(){
        return provinsi::pluck('title', 'code');

    }

    public function getkota($id)
    {
        return kota::where('provinsi_code', $id)->pluck('title', 'code');
    }

    public function getkurir(){
        return kurir::pluck('title', 'code');
    }
}



