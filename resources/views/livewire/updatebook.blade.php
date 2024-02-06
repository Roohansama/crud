<div>

    <form wire:submit="updatebook">
        <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input type="text" placeholder="{{$update->Book}}" wire:model.lazy="book">

        </div>
        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text" placeholder="{{$update->Author}}"  wire:model.lazy="author">
        </div>
        <div class="mb-3">
            <label  class="form-label">Book Description</label>
            <input type="text" placeholder="{{$update->Description}}" wire:model.lazy="description">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
