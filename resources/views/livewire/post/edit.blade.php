
        <div class="col-md-12">
           
            <form wire:submit.prevent="update" class="form-group">
                <textarea wire:model.lazy="body" class="form-control"></textarea>
                <button type="submit" class="btn btn-sm btn-info mt-2">update</button>
            </form>
            
            <button class="btn btn-sm btn-info mt-2" wire:click="canceledit" >cancel</button>
        </div>

