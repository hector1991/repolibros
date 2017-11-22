
@extends('menuprincipal')
@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>LISTA DE CLIENTES</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">LISTA DE CLIENTES</H1>
     </div>
</head>
<body>

{{ session("mensaje") }}

<div class="mx-sm-5">
<table class="table table-bordered table-inverse">
<tr>
     <th class="text-primary font-italic ">NOMBRE</th>
     <th class="text-primary font-italic ">APELLIDO</th>
     <th class="text-primary font-italic ">DNI</th>
     <th class="text-primary font-italic ">ACTIVO</th>
     <th class="text-danger font-italic ">ELIMINAR</th>
     <th class="text-success font-italic ">EDITAR</th>	
</tr>


@foreach ($clientes_list as $cliente)


<tr>
     <td>{{ $cliente->persona->nombre }}</td>
     <td>{{ $cliente->persona->apellido  }}</td>
     <td>{{ $cliente->persona->dni }}</td>
     <td>{{ $cliente->activo }}</td>
     <td><a href="clientes/{{ $cliente->id }}" class="btn btn-danger">Eliminar</a></td>
     <td><a href="clientes/{{ $cliente->id }}/edit" class="btn btn-success">Editar</a></td>
     

    

@endforeach
</table>
</div>

<a href="clientes/create" class="btn btn-primary">Nuevo Cliente</a>

</body>
</html>
@endsection