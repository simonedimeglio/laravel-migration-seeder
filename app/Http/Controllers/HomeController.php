<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class HomeController extends Controller
{
    public function index() {


        // SELECT * FROM trips 
        // Grazie a ORM possiamo evitare di scrivere query 

        // ESERCIZIO STANDARD
        // $allTrips = Trip::all();
        
        // BONUS
        $allTrips = Trip::where('discount', '!=', 0)->get();

        // DEBUGGING DUMPS
        // dump($allTrips);
        // dump($allTrips[0]->title);

        // Passo i dati alla view
        return view('home', compact('allTrips'));

    }


}

