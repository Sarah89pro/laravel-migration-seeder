<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViaggioModel;

class ViaggioController extends Controller
{
    //Viaggi
    public function index() {
        return view('viaggi');
    }
}
