<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DigitalController extends Controller
{
    public function index()
    {
        Actor::get();

        DB::table('actors')->get();
    	return 'Hola mundo';
    }

    public function guapo($name)
    {
    	return "$name es guapo";
    }

    public function resultado($numero, $numero2 = null)
    {
    	if(! is_null($numero2)) {
	        return $numero * $numero2;
	    }

    	return $numero % 2 ? 'Es Par' : 'Impar';
    }

    public function welcome()
    {
    	return view('welcome');
    }

    public function blade()
    {
    	return view('blade.pruebas', ['title' => 'Blade' ]);
    }
}
