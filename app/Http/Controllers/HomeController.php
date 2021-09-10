<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class HomeController extends Controller
{
    public function index() {


        // SELECT * FROM trips 
        // Grazie a ORM possiamo evitare di scrivere query 
        $allTrips = Trip::all(); //$nomeCheVuoi = Nomedelmodel::all();
        
        // DEBUGGING DUMPS
        // dump($allTrips);
        // dump($allTrips[0]->title); // per selezionare la singola proprietà

        // Passo i dati alla view
        return view('home', compact('allTrips'));

    }


}

