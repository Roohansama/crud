<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Validate;


class Addbook extends Component
{
    public $add;
//    #[Validate('required')]
    public $bookname;
//    #[Validate('required')]
    public $authorname;

//    #[Validate('required')]
    public $description;

    protected $rules = [
        'bookname' => 'required|string',
        'authorname' => 'required|string',
        'description' => 'required|string',
    ];

    public function newBook(){
        $this->validate();

        $this->add= new Book;
        $this->add->Book= $this->bookname;
        $this->add->Author= $this->authorname;
        $this->add->Description= $this->description;
        $this->add->save();
        $this->redirect('/');

    }
    public function render()
    {
        return view('livewire.addbook');
    }
}
