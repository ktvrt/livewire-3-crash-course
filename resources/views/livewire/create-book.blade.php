<div class="create">
    <h3>Crear un nuevo libro</h3>

    <form wire:submit="guardar">
        <div class="field">
            <label for="title">Título:</label>
            <input type="text" id="title" wire:model="title" placeholder="Título del libro">
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="field">
            <label for="author">Autor:</label>
            <input type="text" id="author" wire:model="author" placeholder="Autor del libro">
            @error('author')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="field">
            <label for="rating">Calificación:</label>
            <input type="text" id="rating" wire:model="rating" placeholder="Calificación del libro">
            @error('rating')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button>Guardar</button>
    </form>
</div>
