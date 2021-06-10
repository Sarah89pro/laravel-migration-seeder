<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    //

    //Viaggi
    public function index() {
        return view('travels');
    }
}
