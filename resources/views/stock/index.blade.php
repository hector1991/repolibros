@extends('menuPrincipal')

@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>STOCK DE LIBROS</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">STOCK DE LIBROS</H1>
     </div>
</head>
<body>
{{ session("mensaje") }}
	
 <div class="mx-sm-5">
	<table border="1" class="table table-inverse">
		<tr>
			<th class="text-primary font-italic ">LIBRO</th>
			<th class="text-primary font-italic ">CANTIDAD MINIMA</th>
			<th class="text-primary font-italic ">CANTIDAD MAXIMA</th>
			<th class="text-success font-italic ">ACTUALIZAR</th>
	    </tr>

	    @foreach ($stock_list as $stock)

	   	<tr>
			<td>{{ $stock->libro->titulo }}</td>
			<td>{{ $stock->cantidad_minima }}</td>
			<td>{{ $stock->cantidad_actual }}</td>
			<td>
				<a href="stock/{{ $stock->id }}/edit" class="btn btn-success">Actualizar</a>
			</td>
	    </tr>

	    @endforeach
	</table>
 </div>
</body>
</html>
	
@endsection