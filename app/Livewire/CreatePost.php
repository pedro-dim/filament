<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $title = 'Post title...';

    public $miss = 'Miss title';
    public function render()
    {
        return view('livewire.create-post');
    }
}
