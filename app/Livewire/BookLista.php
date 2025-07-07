<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class BookLista extends Component
{    
    use WithPagination;
    public $buscador;
    public $title = "Lista de Libros - Home";

    public function eliminar(Book $libro){
        $libro->delete();
        //$this->emit('bookDeleted', $libro->id);
    }

    // Gancho de ciclo de vida
    // cuando se actualiza el valor de la propiedad $buscador, se ejecuta este método
    // se usa para resetear la paginación a la primera página
    // se ejecuta cada vez que se actualiza el valor de $buscador
    public function updatingBuscador()
    {
        $this->resetPage();
    }

    #[Title('Lista de Libros - Home')]
    public function render()
    {              
        return view('livewire.book-lista',
            [                
                'libros' => Book::latest()->where("title","LIKE", "%{$this->buscador}%")
                    ->orWhere("author","LIKE", "%{$this->buscador}%")->paginate(6)                
            ]);
    }
}
