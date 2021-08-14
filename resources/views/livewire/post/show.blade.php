<div class="container">
    <div class="row">
        <h1>Laravel livewire </h1>
    </div>
    <div class="row">

        @if ($updateMode)
         @livewire('post.edit')
        @else
         @livewire('post.create')
        @endif
                      
    
        <div class="card col-md-12">
            <div class="card-header">
             List Data
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($datas as $key => $item)
                 <li class="list-group-item">{{$item->body}}  || <button class="mr-2 btn btn-sm btn-warning" wire:click="editdata({{$item->id}})">edit</button> || <button class="btn btn-sm btn-danger" wire:click="delete({{$item->id}})">x</button></li> 
                 @endforeach
            </ul>
          </div>  
    </div>
   
    
         {{-- || <button wire:click="delete({{$key}})">x</button> <br> --}}


    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
