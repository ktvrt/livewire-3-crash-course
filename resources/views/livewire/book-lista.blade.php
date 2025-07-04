<div>
    <livewire:pagina-header subtitulo="Esta es una lista de tus libros..."/>    

    <div>
        <input 
            type="text" 
            wire:model.live.debounce.500ms="buscador" 
            placeholder="Buscar libro por título"
        >
        <h2>buscar: {{ $buscador }}</h2>        
    </div>
    <ul class="list">
        @foreach($libros as $libro)
            <li wire:key="{{ $libro->id }}">
                <button 
                    wire:click="eliminar({{ $libro->id }})"
                    wire:confirm="Are you sure you want to delete esto?"
                    >Eliminar 
                </button>
                <h3>{{ $libro->title }}</h3>
                <h4>Autor: {{ $libro->author }}</h4>
                <p>Raiting: {{ $libro->rating }}/10</p>                
            </li>
        @endforeach
    </ul>        
    
    {{ $libros->links() }}
    
</div>
