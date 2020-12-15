<?php

namespace App\Http\Controllers;

//use App\Http\Livewire\Neighborhoods;
use App\Models\neighborhood;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNeighborhood;

class NeighborhoodController extends Controller
{
    public function index()
    {
        $neighborhoods = neighborhood::paginate();
        //return $neighborhoods;

        return view('neighborhoods.index',compact('neighborhoods'));
    }

    public function show(neighborhood $neighborhood)
    {
        return view('neighborhoods.show', compact('neighborhood'));
    }

    public function create()
    {
        return view('neighborhoods.create');
    }

    public function store(StoreNeighborhood $request)
    {
        /*$neighborhood = new neighborhood();

        $neighborhood->neighborhood = $request->neighborhood;
        $neighborhood->save();*/

        //asignaacion masiva
        /*$neighborhood = neighborhood::create([
            'neighborhood' => $request->neighborhood
        ]);*/
        $neighborhood = neighborhood::create(request()->all());

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

        /*$neighborhood->neighborhood =$request->neighborhood;
        $neighborhood->save();*/
        $neighborhood->update($request->all());

        return redirect() -> route('neighborhoods.index');
    }

    public function destroy(neighborhood $neighborhood)
    {
        $neighborhood->delete();
        return redirect()->route('neighborhoods.index');
    }
}
