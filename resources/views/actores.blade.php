@extends('blade.master')

@section('title', 'Listado de Actores')

@section('content')
	@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
    </div>
    @endif

    <div class="row">
    	<div class="col-md-6">
			<form action="{{ route('actor.search') }}" class='form-inline' method="GET">
				@csrf	
				<div class="form-group">
				    <label for="search">Name</label>
				    <input name='search' type="text" class="form-control" placeholder="Jane Doe" value="{{ old('search') }}">
				  </div>		
				  <button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
		<div class="col-md-6">
			<form action="{{ route('actor.index') }}" method="GET">
				<input type="submit" name="Limpiar" value="Limpiar Busqueda">
			</form>
		</div>	
    </div>

    <p>

    <div class="row">
    	<div class="col-md-12">

    		<table class="table">  
    			<thead> 
    				<tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Show</th> </tr> 
    			</thead> 
    			<tbody> 
    				@foreach ($actores as $actor)
    				<tr>
    					<td>
    						{{ $actor->id }}
    					</td> 
    					<td>
    						{{ $actor->first_name }}
    					</td> 
    					<td> 
    						{{ $actor->last_name }} 
    					</td> 
    					<td>
    						<a href="{{ route('actor.show', $actor->id) }}"> Ver </a>
    					</td>
    				</tr>						
					@endforeach    		
    			</tbody> 
    		</table>
    		<ul>
			
			</ul>
	    	</div>
    	</div>
    </div>
@endsection