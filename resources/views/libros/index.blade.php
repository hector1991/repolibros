@extends('menuprincipal')
@section('content')

<!DOCTYPE html>
<html>
<head class="badge badge-dark">
     <title>LISTA DE LIBROS</title>
     <div class="mx-sm-5">
     <H1 class="table table-bordered table-inverse">LISTA DE LIBROS</H1>
     </div>
</head>
<body>
{{ session("mensaje") }}

<br>
<div class="mx-sm-5">
<table class="table table-bordered table-inverse">
<tr>
     <th class="text-primary font-italic">TÍTULO</th>
     <th class="text-primary font-italic">EDITORIAL</th>
     <th class="text-primary font-italic">AUTOR</th>
     <th class="text-primary font-italic">FECHA EDICION</th>
     <th class="text-primary font-italic">TIPO DE TAPA</th>
     <th class="text-primary font-italic">GÉNERO</th>
     <th class="text-primary font-italic">PRECIO</th>
     <th class="text-primary font-italic">PROVEEDOR</th>
     <th class="text-danger font-italic">ELIMINAR</th>	
     <th class="text-success font-italic">EDITAR</th> 

</tr>


@foreach ($libros_list as $libro)


<tr>
     <td>{{ $libro->titulo }}</td>
     <td>{{ $libro->editorial  }}</td>
     <td>{{ $libro->autor }}</td>
     <td>{{ $libro->fecha_edicion }}</td>
     <td>{{ $libro->tipo_tapa }}</td>
     <td>{{ $libro->genero }}</td>
     <td>{{ $libro->precio }}</td>
     <td>{{ $libro->proveedor->razon_social }}</td>
     <td><a href="libros/{{ $libro->id }}" class="btn btn-danger">Eliminar</a></td>
     <td><a href="libros/{{ $libro->id }}/edit" class="btn btn-success">Editar</a></td>



</tr>
@endforeach
</table>
</div>

<br>

<a href="libros/create" class="btn btn-primary">Agregar Nuevo Libro</a>
</body>
</html>
@endsection