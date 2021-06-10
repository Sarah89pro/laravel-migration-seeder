<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class VacationController extends Controller
{
    
    //Home
    public function index() {
        return view('vacations');
    }

    
}

