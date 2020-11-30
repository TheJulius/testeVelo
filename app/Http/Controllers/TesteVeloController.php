<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canducci\ZipCode\Facades\ZipCode;

class TesteVeloController extends Controller
{
    public function index() {
        return view('testeVelo');
    }
}
