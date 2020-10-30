<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Neighborhoods extends Component
{
    
    public $count=0;

    public function render()
    {
        return view('livewire.neighborhoods');
    }

    public function showMap()
    {
        $this->count++;
    }
}
