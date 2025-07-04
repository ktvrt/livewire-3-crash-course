<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BookLista;
use App\Livewire\CreateBook;

Route::get('/bladelivewire', function () {
    return view('welcome');
});

Route::get('/', BookLista::class);
Route::get("/create", CreateBook::class);