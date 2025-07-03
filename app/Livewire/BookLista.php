<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class BookLista extends Component
{
    public $name = "Beto";
    public $contador = 0;

    public function incrementar($numero)
    {
        $this->contador+=$numero;        
    }

    public function eliminar(Book $libro){
        $libro->delete();
        //$this->emit('bookDeleted', $libro->id);
    }

    public function render()
    {
        return view('livewire.book-lista',
            [
                'libros' => Book::all()
            ]);
    }
}
