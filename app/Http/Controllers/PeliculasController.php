<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function buscarPeliculaId($id)
    {
    	$peliculas = [
			1 => "Toy Story",
			2 => "Buscando a Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episodio V",
			5 => "Up",
			6 => "Mary and Max"
		];

		return isset($peliculas[$id]) ? $peliculas[$id] : 'No hay resultados';

    }

    public function buscarPeliculaNombre($nombre)
    {
    	$peliculas = [
			1 => "Toy Story",
			2 => "Buscando a Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episodio V",
			5 => "Up",
			6 => "Mary and Max"
		];

		foreach ($peliculas as $pelicula) {
			if (str_contains(str_slug($pelicula, ''), str_slug($nombre, ''))) {
				return $pelicula;
			}
		}

		return 'No se encontraron resultados';
    }

    public function buscarPeliculaNombreFor($nombre)
    {
    	$peliculas = [
			1 => "Toy Story",
			2 => "Buscando a Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episodio V",
			5 => "Up",
			6 => "Mary and Max"
		];

		$nombreFiltrado = strtolower(str_replace(' ', '', $nombre));

		for ($i = 1; $i < count($peliculas); $i++) {	
			$peliculaFiltrada = strtolower(str_replace(' ', '', $peliculas[$i]));		
			if ($nombreFiltrado == $peliculaFiltrada) {
				return $peliculas[$i];
			}
		}

		return 'No se encontraron resultados';
    }

    public function index()
    {
    	$peliculas = [
			1 => "Toy Story",
			2 => "Buscando a Nemo",
			3 => "Avatar",
			4 => "Star Wars: Episodio V",
			5 => "Up",
			6 => "Mary and Max"
		];
		
    	return view('peliculas')->with('peliculas', $peliculas);
    }
}
