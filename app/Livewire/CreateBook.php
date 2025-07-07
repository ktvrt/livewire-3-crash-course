<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;


class CreateBook extends Component
{
    #[Rule("string|required|min:3|max:50")]
    public $title;
    #[Rule("string|required|min:3|max:50")]
    public $author;
    #[Rule("numeric|required|min:1|max:10")]
    public $rating;

    public function guardar(){
        
        $this->validate();

        // Create a new book record
        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        $this->redirect("/",navigate: true);
    }

    #[Layout('components.layouts.segundo')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
