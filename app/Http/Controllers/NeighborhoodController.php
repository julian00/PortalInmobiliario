<?php

namespace App\Http\Controllers;

//use App\Http\Livewire\Neighborhoods;
use App\Models\neighborhood;
use Illuminate\Http\Request;

class NeighborhoodController extends Controller
{
    public function index()
    {
        $neighborhoods = neighborhood::paginate();
        //return $neighborhoods;

        return view('neighborhoods.index',compact('neighborhoods'));
    }

    public function show($id)
    {
        $neighborhood = neighborhood::find($id);
        //return $neighborhood;
        return view('neighborhoods.show', compact('neighborhood'));
    }

    public function create()
    {
        return view('neighborhoods.create');
    }

    public function store(Request $request)
    {
        //valida el formulario
        $request->validate([
            'neighborhood' => 'required|max:45'
        ]);

        $neighborhood = new neighborhood();

        $neighborhood->neighborhood = $request->neighborhood;
        $neighborhood->save();

        return redirect() -> route('neighborhoods.index');
    }
   
    public function edit(neighborhood $neighborhood)
    {
        return view('neighborhoods.edit', compact('neighborhood'));
    }

    public function update(Request $request, neighborhood $neighborhood)
    {
        //valida el formulario
        $request->validate([
            'neighborhood' => 'required|max:45'
        ]);

        $neighborhood->neighborhood =$request->neighborhood;
        $neighborhood->save();
        return redirect() -> route('neighborhoods.index');
    }
}
