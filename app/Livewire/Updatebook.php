<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Book;



class Updatebook extends Component
{
    public $book, $author, $description, $update;


    public $finalid;


    public function mount($bid){
//        dd($bid);
        $this->finalid=$bid;
        $this->update= Book::find($this->finalid);

    }


    public function updatebook(){

        $this->update->Book =$this->book;
        $this->update->Author =$this->author;
        $this->update->Description =$this->description;
        $this->update->save();
        $this->redirect('/');


    }

    public function render()
    {
        return view('livewire.updatebook');
    }
}
