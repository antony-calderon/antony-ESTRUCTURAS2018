<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<h2>inicio 	form</h2>
	<form action="{{url('formulario')}}" method="POST">
		{{csrf_field()}}
		<input type="text" name="nombre">
		<input type="text" name="apellido">
		<input type="text" name="edad">
		<input type="text" name="sexo">
		<input type="text" name="telefono">
		<input type="text" name="curso">
		<button type="submit">Enviar</button>
	</form>
</body>
</html>