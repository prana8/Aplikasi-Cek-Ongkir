<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(){
        $provinsi = $this->getprovinsi();
        return view('dashboard', compact('provinsi'));
    }

    public function getprovinsi(){
        return provinsi::pluck('title', 'code');

    }
}

