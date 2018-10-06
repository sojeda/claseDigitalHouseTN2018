@extends('blade.master')

@section('title')
	{{ $titulo }}
@endsection

@section('content') 
	<ol>
	@for($i = 1; $i <= 3; $i++)
	    <li>{{ $i }}</li>
	@endfor
	</ol>

	@php
		$i = 0;
	@endphp

	<ol>
	@while($i++ < 10)
	    <li>Me faltó {{ $i }}</li>
	@endwhile
	</ol>

	@forelse([ ] as $item)
	    {{-- Si hubiera items, entraríamos acá --}}
	    <strong>No creo que entre acá... ¿{{ $item }}?</strong>
	@empty
	    {{-- Cuando la lista está vacía, se muestra esto (una sola vez) --}}
	    <em>La lista está vacía.</em>
	@endforelse
@endsection
