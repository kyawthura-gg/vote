<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IdeaIndex extends Component
{
    public $idea;
    public $votesCount;

    public function render()
    {
        return view('livewire.idea-index');
    }
}
