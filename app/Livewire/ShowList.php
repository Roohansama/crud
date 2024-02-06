<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Book;

class ShowList extends Component
{
    public $books=[];

    public $bid;


    public function mount(){
        $this->books= Book::all();
    }


    public function update($id){
        $this->bid=$id;

        $this->dispatch('update', $this->bid);
}



    public function delete($id){
//        DB::table('books')->where('id', $id)->delete();
        Book::find($id)->delete();
        $this->redirect('/');

    }

    public function render()
    {
        return view('livewire.show-list');
    }
}
