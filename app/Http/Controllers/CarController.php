<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Car;

class CarController extends Controller
{
    public function store() {
        $car = new Car();

        $car->marca = 'Volkswagen';
        $car->modello = 'Golf';
        $car->targa = '3g457fd';

        $car->save();

        echo 'car created!';
    }
}
