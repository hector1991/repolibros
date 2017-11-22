@extends('menuprincipal')
@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>REGISTRAR FACTURA</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">REGISTRAR FACTURA</H1>
     </div>
</head>
{{ session("mensaje") }}

<body>
<div class="mx-sm-5">

<div class="table table-inverse"  >
<br>
<form method="POST" action="{{ asset ('facturas') }}" class="mx-sm-4">
<div class="form-group">
<input type="hidden" name="_token" value="{{csrf_Token()}}">

  <label for="example-search-input" class="col-2 col-form-label">Numero</label><input type="number" name="txtnumero">
  

<div class="form-group">
  <label for="example-url-input" class="col-2 col-form-label">Fecha:</label><input type="date" name="txtfecha">
	
</div>

<div class="form-group">
<label for="example-url-input" class="col-2 col-form-label">Tipo:</label>
<select name="cbotipo">
<option value="A" >A</option>
<option value="B" >B</option>
<option value="C" >C</option>

</select>
  <br>
  <label for="example-url-input" class="col-2 col-form-label">Cliente:</label>
  <select name="cbocliente">
    @foreach ($clientes_list as $cliente)
    <option value= "{{ $cliente->id }}">{{ $cliente->persona->apellido }}
      
    </option>
    @endforeach
    </select>

</div>
<br>
<input type="submit" value="Guardar datos" class=" btn btn-primary">


	
</form>

</div>
</div>
<br>
<a href="/libros/public/facturas" class="btn btn-warning">Volver al Listado</a>


</body>
</html>
@endsection