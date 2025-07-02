<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookLista extends Component
{
    public $name = "Beto";

    public function render()
    {
        return view('livewire.book-lista',
            [
                'libros' => Book::all()
            ]);
    }
}
