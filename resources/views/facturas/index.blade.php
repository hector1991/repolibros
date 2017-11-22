@extends('menuPrincipal')

@section('content')
<!DOCTYPE html>
<html>
<head class="badge badge-dark">
	<title>FACTURAS</title>
     <div class="mx-sm-5">
	<H1 class="table table-bordered table-inverse">FACTURAS</H1>
     </div>
</head>
<body>
{{ session("mensaje") }}
	
 <div class="mx-sm-5">
	<table border="1" class="table table-inverse">
		<tr>
			<th class="text-primary font-italic ">NUMERO</th>
			<th class="text-primary font-italic ">FECHA</th>
			<th class="text-primary font-italic ">TIPO</th>
			<th class="text-primary font-italic ">CLIENTE</th>
			<th class="text-success font-italic ">DETALLE</th>

	    </tr>

	    @foreach ($facturas_list as $factura)

	   	<tr>
			<td>{{ $factura->numero }}</td>
			<td>{{ $factura->fecha }}</td>
			<td>{{ $factura->tipo }}</td>
		    <td>{{ $factura->cliente_id }}</td>
			
				<td>
				<a href="facturas/{{ $factura->id }}/detalle/add" class="btn btn-success">Detalle</a>
				<a href="facturas/create" class="btn btn-primary">Nueva Factura</a>


			</td>
	    </tr>

	    @endforeach
	</table>
 </div>
</body>
</html>
	
@endsection