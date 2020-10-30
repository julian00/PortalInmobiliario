<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Neighborhoods;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    public function show()
    {
        return view('neighborhoods.show');
    }

    public function add()
    {
        return view('Neighborhoods.add');
    }
   
}
