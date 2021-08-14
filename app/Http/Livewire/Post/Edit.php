<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Edit extends Component
{

    public $body;
    public $iddata;
    public $data;
    public $updateMode;
    
    protected $listeners = ['editdata' => 'dataedit'];

    public function dataedit($data)
    {
        $this->body = $data['body'];
        $this->iddata =  $data['id'];
    }

    public function canceledit()
    {
        $this->updateMode = false;
        $this->body= "";
        $this->emit('canceledit');
    }

    public function update()
    {
        $dataupdate = Post::find($this->iddata);
        if($dataupdate){
            $dataupdate->update([
                'body' => $this->body
            ]);
            $this->emit('dataupdate');
        }
        else{
           
            $this->emit('dataupdate');
        }
       
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}