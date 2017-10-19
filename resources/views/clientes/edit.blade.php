<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR NUEVO CLIENTE</title>
	<h1>AGREGAR NUEVA CLIENTE</h1>
</head>
{{ session("mensaje") }}

<body>

<form method="POST" action="{{ asset ('clientes/' . $cliente->id) }}">
    <input type="hidden" name="_method" value="PUT">

	<input type="hidden" name="_token" value="{{csrf_Token()}}">
	nombre: <input type="text" name="txtnombre" value="{{ $cliente->persona->nombre }}"><br>
	Apellido: <input type="text" name="txtapellido" value="{{ $cliente->persona->apellido }}"><br>
	DNI: <input type="tetx" name="txtdni" value="{{ $cliente->persona->dni }}"><br>
	Fecha de Nacimiento: <input type="date" name="txtfechanacimiento" value="{{ $cliente->persona->fecha_nacimiento }}"><br>
	Domicilio:<input type="text" name="txtdomicilio" value="{{ $cliente->persona->domicilio }}"><br>
	<input type="submit" name="Actualizar">



</form>
<br>
<a href="/libros/public/clientes">Volver al Listado</a>


</body>
</html>