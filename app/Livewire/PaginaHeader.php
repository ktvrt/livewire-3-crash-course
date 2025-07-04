<?php

namespace App\Livewire;

use Livewire\Component;

class PaginaHeader extends Component
{
    public $name = "Beto";
    public $contador = 0;
    public $subtitulo;

    //gancho de ciclo de vida
    //se ejecuta antes de renderizar el componente
    //se puede usar para inicializar variables, hacer consultas a la base de datos, etc.
    //se ejecuta una sola vez al cargar el componente
    //se puede usar para pasar datos al componente desde el controlador
    //se puede usar para pasar datos al componente desde la vista
    public function mount($subtitulo){
        $this->subtitulo = $subtitulo;
    }

    public function incrementar($numero)
    {
        $this->contador+=$numero;        
    }

    public function render()
    {
        return view('livewire.pagina-header');
    }
}
