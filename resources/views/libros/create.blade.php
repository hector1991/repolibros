@extends('menuprincipal')
@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>REGISTRAR LIBRO</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">REGISTRAR LIBRO</H1>
     </div>
</head>
<body>
{{ session("mensaje") }}<br>
<div class="mx-sm-5">

<div class="table table-inverse"  >

<form method="POST" action="{{ asset ('libros') }}" class="mx-sm-4">
	<input type="hidden" name="_token" value="{{csrf_Token()}}">
	 <label for="example-search-input" class="col-2 col-form-label">Nombre: </label><input type="text" name="txttitulo"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Editorial: </label><input type="text" name="txteditorial"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Autor: </label><input type="tetx" name="txtautor"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Fecha Edicion: </label><input type="date" name="txtfechaedicion" ><br>
	 <label for="example-search-input" class="col-2 col-form-label">Tipo de Tapa: </label><input type="text" name="txttapa"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Genero: </label><input type="text" name="txtgenero"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Precio: </label><input type="number" step="any" name="numprecio"><br>
	 <label for="example-search-input" class="col-2 col-form-label">Proveedor: </label><select for="example-search-input" class="col-2 col-form-label" name="proveedor_id" id="inputproveedor_id" >
		

               @foreach ($proveedores as $proveedor)
               <option value="{{ $proveedor['id'] }}">{{ $proveedor['razon_social'] }}</option>
               @endforeach
	
	</select>
<br>
<br>
	
	<input type="submit" name="Guardar datos" value="Guardar" class="btn btn-primary">



</form>
</div>

<a href="/libros/public/libros" class="btn btn-warning">Volver a lista de Libros</a>
<br>
@endsection
<br>
</div>
</body>
</html>