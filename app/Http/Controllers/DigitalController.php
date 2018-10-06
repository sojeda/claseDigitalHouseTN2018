<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalController extends Controller
{
    public function index()
    {
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