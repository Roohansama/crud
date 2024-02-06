<?php

namespace App\Livewire;


use Livewire\Component;

class Book extends Component
{
    public $s;
    public $a;
    public $u, $bid;

    protected $listeners = ['update' =>'update'];



    public function show(){
        $this->u=false;
        $this->s=true;
        $this->a=false;
    }

    public function add(){
        $this->u=false;
        $this->s=false;
        $this->a=true;
    }

    public function update($bid){
        $this->bid= $bid;
       $this->u=true;
       $this->s=false;
       $this->a=false;
//       dd($bid);

        return view('livewire.book')->with($this->bid);



    }


    public function render()
    {
        return view('livewire.book');
    }
}
