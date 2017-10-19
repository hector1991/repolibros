
@extends('menuprincipal')
@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>REGISTRAR CLIENTE</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">REGISTRAR CLIENTE</H1>
     </div>
</head>
{{ session("mensaje") }}

<body>
<div class="mx-sm-5">

<div class="table table-inverse"  >
<br>
<form method="POST" action="{{ asset ('clientes') }}" class="mx-sm-4">
<div class="form-group">
<input type="hidden" name="_token" value="{{csrf_Token()}}">

  <label for="example-search-input" class="col-2 col-form-label">Nombre</label><input type="text" name="txtnombre">
  
</div>
<div class="form-group">
  <label for= "example-search-input" class="col-2 col-form-label">Apellido</label><input type="text" name="txtapellido">
  
  </div>


<div class="form-group">
  <label for="example-email-input" class="col-2 col-form-label">DNI:</label><input type="tetx" name="txtdni">
	
</div>
<div class="form-group">
  <label for="example-url-input" class="col-2 col-form-label">Fecha de Nacimiento:</label><input type="date" name="txtfechanacimiento">
	
</div>
<div class="form-group">
  <label for="example-tel-input" class="col-2 col-form-label">Domicilio:</label><input type="text" name="txtdomicilio"><br>
  
</div>
<br>
<input type="submit" value="Guardar datos" class=" btn btn-primary">



	
</form>

</div>
</div>
<br>
<a href="/libros/public/clientes" class="btn btn-warning">Volver al Listado</a>


</body>
</html>
@endsection