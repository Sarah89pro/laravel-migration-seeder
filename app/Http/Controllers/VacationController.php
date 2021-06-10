<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class VacationController extends Controller
{
    
    //Home
    public function index() {

        //get all data
        $vacations= Vacation::all();
        //dump($vacations);

        //impaginazione
        $vacations = Vacation::simplePaginate(5);


        return view('vacations', compact('vacations'));
    }

    
}

