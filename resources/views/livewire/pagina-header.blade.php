<header class="flex justify-between items-center mb-4">
    <div>
        <h2>Libros de {{ $name }}</h2>
        <p> {{ $subtitulo }}</p>
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
