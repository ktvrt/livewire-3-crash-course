<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookLista;

Route::get('/bladelivewire', function () {
    return view('welcome');
});

Route::get('/', BookLista::class);