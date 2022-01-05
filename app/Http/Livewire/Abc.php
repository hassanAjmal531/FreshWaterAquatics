<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Abc extends Component
{
    public function abc(){
        dd("asdfg");
    }
    public function render()
    {
        return view('livewire.abc');
    }
}
