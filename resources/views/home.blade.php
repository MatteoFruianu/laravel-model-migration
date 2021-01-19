
@extends('layouts.main')

@section('content')
    <h1>CAR CATALOGUE</h1>

    <h2>Our Cars</h2>

    <p>
        @foreach ($cars as $car)
            <li>
                <h3>{{ $car->modello }}</h3>
                <div class="brand">{{ $car->marca }}</div>
                <div class="plate">{{ $car->targa }}</div>
            </li>
        @endforeach
    </p>
    
@endsection