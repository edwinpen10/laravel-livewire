<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Create extends Component
{
    public $body;

    public function add()
        {
            Post::create([
                'body' => $this->body
            ]);
            $this->body= "";
            $this->emit('adddata');
        }


    public function render()
    {
        return view('livewire.post.create');
    }
}
