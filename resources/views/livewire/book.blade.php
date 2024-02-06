<div>
    <div class="text-center">
        <h1>Books listing</h1>
    </div>
    <div class="text-center d-inline">
        <div><button class="btn btn-primary" wire:click="show">Show List</button></div>
        <div><button class="btn btn-success" wire:click="add">Add New Book</button></div>
    </div>


    @if($s==true)
        @livewire('ShowList')
    @endif

    @if($a==true)
        @livewire('AddBook')
    @endif


    @if($u==true)
        @livewire('UpdateBook',[$bid])
    @endif





</div>
