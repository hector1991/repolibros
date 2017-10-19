


<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR NUEVO PROVEEDOR</title>
	<H1>AGREGAR NUEVO PROVEEDOR</H1>
</head>
<body>
<form method="POST" action="{{ asset ('proveedores') }}">
	<input type="hidden" name="_token" value="{{csrf_Token()}}">
	Razon Social: <input type="text" name="txtrazonsocial"><br>
	Domicilio:<input type="text" name="txtdomicilio"><br>
	E-MAIL: <input type="tetx" name="txtemail"><br>
	Tel.Celular: <input type="number" name="numcelular"><br>
	Tel.Fijo: <input type="number" name="numtelefono"><br>
	
	
	<input type="submit" name="Guardar datos" value="Guardar">



</form>
</body>
</html>