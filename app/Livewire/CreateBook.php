<?php

namespace App\Livewire;

use Limewire\Attributes\Layout;
use Livewire\Component;


class CreateBook extends Component
{
    #[Layout('components.layouts.segundo')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
