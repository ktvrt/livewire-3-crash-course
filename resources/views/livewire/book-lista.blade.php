<div>
    <h1>Lista de Biblioteca</h1>
    <header class="flex justify-between items-center mb-4">
        <div>
            <h2 class="text-xl font-bold">Libros de {{ $name }}</h2>
        </div>        
    </header>

    <ul class="list">
        @foreach($libros as $libro)
            <li wire:key="{{ $libro->id }}">
                <h3>{{ $libro->title }}</h3>
                <h4>Autor: {{ $libro->author }}</h4>
                <p>Raiting: {{ $libro->rating }}/10</p>                
            </li>
        @endforeach
    </ul>
</div>
