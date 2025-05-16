<?php

namespace App\Http\Controllers;

use App\Models\biglietto;
use Illuminate\Http\Request;
use App\Models\evento;

class PublicController extends Controller
{
    public function homepage(){
        $events = evento::all();
        $biglietti = biglietto::all();
        return view('home', compact('events','biglietti'));
    }
}
