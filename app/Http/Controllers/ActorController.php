<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory()
    {
    	$actores = Actor::all();

    	return view('actores', compact('actores'));
    }

    public function show($id)
    {
    	$actor = Actor::find($id);

    	return view('actor', compact('actor'));
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ], [
            'search.required' => 'Coloca un nombre'
        ]);

        $actores = Actor::where('first_name', 'LIKE', '%' . $request->input('search'))->get();

        return view('actores', compact('actores'));
    }
}
