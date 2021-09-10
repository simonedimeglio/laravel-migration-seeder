<?php

// Trip.php viene creato dal comando
// php artisan make:model Trip

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // Trip diventa trips

    // in maniera del tutto automatica
    // la classe parent Model, crea tutte le 
    // proprietà interne alla classe Trip
    // che corrispondono alle singole colonne
    // della nostra tabella
}
