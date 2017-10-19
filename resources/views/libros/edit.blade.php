<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR NUEVO LIBRO</title>
	<H1>AGREGAR NUEVO LIBRO</H1>
</head>
<body>
{{ session("mensaje") }}<br>
<form method="POST" action="{{ asset ('libros/' . $libro->id) }}">
<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{csrf_Token()}}">
	Titulo: <input type="text" name="txttitulo" value="{{ $libro->titulo }}"><br>
	Editorial:<input type="text" name="txteditorial" value="{{ $libro->editorial}}"><br>
	Autor: <input type="tetx" name="txtautor" value="{{ $libro->autor }}"><br>
	Fecha Edicion: <input type="date" name="txtfechaedicion" value="{{ $libro->fecha_edicion }}"><br>
	Tipo de tapa: <input type="text" name="txttapa" value="{{ $libro->tipo_tapa }}"><br>
	Genero: <input type="text" name="txtgenero" value="{{ $libro->genero }}"><br>
	Precio: <input type="number" step="any" name="numprecio" value="{{ $libro->precio }}"><br>
	Proveedor: <select name="proveedor_id" id="inputproveedor_id" class="form-control" value="{{ $libro->proveedor_id }}">
		

               <option  value="{{ $libro->proveedor_id }}"> {{ $libro->proveedor['razon_social'] }}</option>
             
	</select>
<br>

	
	<input type="submit" name="Guardar datos" value="Guardar">



</form>
<br>
<a href="/libros/public/libros">Volver a lista de Libros</a>

</body>
</html>