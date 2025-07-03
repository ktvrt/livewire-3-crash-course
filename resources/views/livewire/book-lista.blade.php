<div>
    <h1>Lista de Biblioteca</h1>
    <header class="flex justify-between items-center mb-4">
        <div>
            <h2 class="text-xl font-bold">Libros de {{ $name }}</h2>
            <div>
                <p> Contador: {{ $contador }}</p>
                <button wire:click="incrementar(1)">Incrementar Contador +1</button>
                <button wire:click="incrementar(3)">Incrementar Contador +3</button>
            </div>
        </div>        

        
        <form wire:submit.prevent="$refresh">
            <span class="mr-2"> Tu nombre :</span>
            <input type="text" wire:model.live.debounce.500ms="name" placeholder="Buscar libro...">
            <button>Actualizar</button>
        </form>
        

    </header>

    

    <ul class="list">
        @foreach($libros as $libro)
            <li wire:key="{{ $libro->id }}">
                <button 
                    wire:click="eliminar({{ $libro->id }})"
                    wire:confirm="Are you sure you want to delete esto?"
                    >Eliminar </button>
                <h3>{{ $libro->title }}</h3>
                <h4>Autor: {{ $libro->author }}</h4>
                <p>Raiting: {{ $libro->rating }}/10</p>                
            </li>
        @endforeach
    </ul>
</div>
