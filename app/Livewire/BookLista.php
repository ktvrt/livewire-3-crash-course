<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class BookLista extends Component
{    
    use WithPagination;
    public $title = "Lista de Libros - Home";

    public function eliminar(Book $libro){
        $libro->delete();
        //$this->emit('bookDeleted', $libro->id);
    }

    #[Title('Lista de Libros - Home')]
    public function render()
    {        
        return view('livewire.book-lista',
            [                
                'libros' => Book::latest()->paginate(6)
            ]);
    }
}
