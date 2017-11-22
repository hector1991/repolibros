@extends('menuPrincipal')

@section('content')

	{{ session("mensaje") }}

	<br><br>

	<form method="POST" action="{{ asset('facturas/' . $factura->id . '/detalle/store') }}">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<table border="4" width="500" cellspacing="10" class="table-inverse">
		  <tr>
			<td>Numero Factura: {{ $factura->numero }}</td>
			<td>Fecha: {{ $factura->fecha }}</td>
		  </tr>

		  <tr>
		  	<td>Tipo: {{ $factura->tipo }}</td>
		  	<td>
		  	    Cliente: {{ $factura->cliente_id }}
		  	</td>
		  </tr>

		  <tr>
		  	<td>
		  	  Libro:
		  	  <select name="cboLibro">
		  	  	@foreach ($libros_list as $libro)
		  	  	  <option value="{{ $libro->id }}">
		  	  	  	{{ $libro->titulo }}
		  	  	  </option>
		  	  	@endforeach
		  	  </select>
		  	</td>
		  	<td>
		  	  Cantidad: <input type="number" name="txtCantidad">
		  	</td>
		  </tr>
                    
		  <tr>
		  	<td colspan="2" align="right"><br>

		  		<input type="submit" value="Añadir Articulo">

		  	</td>
		  </tr>

		</table>
	</form>

    <table border="4" width="500" cellspacing="10" class="table-inverse">
      <tr>
      	<th>Codigo</th>
      	<th>Libro</th>
      	<th>Precio Unitario</th>
      	<th>Cantidad</th>
      	<th>Subtotal</th>
      	<th>Eliminar</th>
      </tr>
          
       @foreach ($detalle_list as $detalle)

       <tr>

       <td> {{ $detalle->libro_id }}</td>
       <td> {{ $detalle->libro->titulo }} </td>
       <td>${{ $detalle->precio }} </td>
       <td> {{ $detalle->cantidad }} </td>
       <td>${{ $detalle->subtotal }}</td>

       <td>
        	  <a href="/libros/public/facturas/detalle/delete/{{$detalle->id}}"  class="btn btn-danger">
        	    Eliminar
        	  </a>
        	</td>
      <tr>
      
      </tr>
      @endforeach
    </table>
    <br>
      <button type="button" class="btn btn-info">Total a pagar: ${{ $factura->total }}</button>
        
      
         
      
@endsection