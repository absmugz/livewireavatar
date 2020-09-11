<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $string = 'abc';
    public function render()
    {
        return view('livewire.test');
    }
}
