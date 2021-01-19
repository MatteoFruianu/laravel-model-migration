<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    //HOMEPAGE

    public function index() {

        // GET DATA FROM DB
        $cars = Car::all();
       
        return view('home', compact('cars'));
     }
}
