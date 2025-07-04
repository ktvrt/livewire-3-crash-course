<div>
    <livewire:pagina-header subtitulo="Esta es una lista de tus libros..."/>    

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
</div>
