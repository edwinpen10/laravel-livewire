<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;


class Show extends Component
{
     public $body;
    public $updateMode=false;
    // public $datas = [];
    
    protected $listeners = [
        'canceledit' => 'canceledit',
        'adddata' => 'render',
        'dataupdate' => 'canceledit'
    ];
   
    public function delete($id)
    {
       
        $data = Post::find($id);
        $data->delete();
       
    }

    public function editdata($id)
    {
        $data = Post::where('id',$id)->first();
        //$this->body = $data->body;
        $this->updateMode=true;

        $this->emit('editdata', $data);

    }

    public function canceledit()
    {
        $this->updateMode = false;
        $this->body= "";
       
    }

   

    public function render()
    {
        $datas = Post::orderBy('id','DESC')->get();
        
        return view('livewire.post.show', compact('datas'));
    }
}
