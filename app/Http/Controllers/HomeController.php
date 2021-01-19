<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    //HOMEPAGE

    public function index() {

        // GET DATA FROM DB
        // $cars = Car::all();

        $cars = Car::where('marca', '!=', 'Ford' )
            ->orderBy('modello', 'desc')
            ->limit(2)
            ->get();
            
       
        return view('home', compact('cars'));
     }
}
