<div>
    <form wire:submit="newBook">
        <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input type="text"  wire:model.lazy="bookname">
            @error('bookname') <span class="text-danger">{{ $message }}</span> @enderror

        </div>
        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input type="text"  wire:model.lazy="authorname">
            @error('authorname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Book Description</label>
            <input type="text" wire:model.lazy="description">
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
