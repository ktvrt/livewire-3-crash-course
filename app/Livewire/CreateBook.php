<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Layout;


class CreateBook extends Component
{
    public $title;
    public $author;
    public $rating;

    public function guardar(){
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        $this->redirect("/");
    }

    #[Layout('components.layouts.segundo')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
