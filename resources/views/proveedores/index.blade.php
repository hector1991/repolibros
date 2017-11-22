@extends('menuprincipal')
@section('content')

<!DOCTYPE html>
<html>
<head>
     <title>LISTA DE PROVEEDORES</title>
     <div class="mx-sm-5">
     <H1  class="table table-bordered table-inverse">LISTA DE PROVEEDORES</H1>
     </div>
</head>
<body >
<div class="mx-sm-5">
<table class="table table-bordered table-inverse">
<tr>
     <th class="text-primary font-italic ">NOMBRE</th>
     <th class="text-primary font-italic ">DIRECCION</th>
     <th class="text-primary font-italic ">E-MAIL</th>
     <th class="text-primary font-italic ">TEL:CELULAR</th>
     <th class="text-primary font-italic ">TEL.FIJO</th> 
     <th class="text-danger font-italic ">ELIMINAR</th>  
     
</tr>


@foreach ($proveedores_list as $proveedores)


<tr>
     <td>{{ $proveedores->razon_social }}</td>
     <td>{{ $proveedores->domicilio  }}</td>
     <td>{{ $proveedores->email }}</td>
     <td>{{ $proveedores->celular }}</td>
     <td>{{ $proveedores->telefono_fijo }}</td>
     <td ><a href="proveedores/{{ $proveedores->id }}" class= "btn btn-danger">Eliminar</td>



</tr>
@endforeach
</table>
</div>
<br>
<a href="proveedores/create" class="btn btn-primary">Nuevo Proveedor</a>
@endsection
</body>
</html>