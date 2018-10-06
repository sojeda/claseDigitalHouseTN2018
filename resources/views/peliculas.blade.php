<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ol>
	@foreach ($peliculas as $pelicula)
		<li>{{ $pelicula }}</li>
	@endforeach
	</ol>
</body>
</html>