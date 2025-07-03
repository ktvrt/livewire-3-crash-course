<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;

class BookLista extends Component
{
    public $name = "Beto";
    public $contador = 0;

    public $title = "Lista de Libros - Home";

    public function incrementar($numero)
    {
        $this->contador+=$numero;        
    }

    public function eliminar(Book $libro){
        $libro->delete();
        //$this->emit('bookDeleted', $libro->id);
    }

    #[Title('Lista de Libros - Home')]
    public function render()
    {
        return view('livewire.book-lista',
            [
                'libros' => Book::all()
            ]);
    }
}
