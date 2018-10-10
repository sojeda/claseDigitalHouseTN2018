<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
	<form action="{{ route('actor.search') }}" method="GET">
		<input type="text" name="search">
		<input type="submit" name="submit">
	</form>
	
	<ul>
	@foreach ($actores as $actor)
		<li><a href="{{ route('actor.show', $actor->id) }}"> {{ $actor->getNombreCompleto() }}</a></li>
	@endforeach
	</ul>
</body>
</html>