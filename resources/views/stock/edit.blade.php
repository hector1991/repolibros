@extends('menuPrincipal')

@section('content')

  {{ session("mensaje") }}
  <br>
 <div  class="table table-inverse ">
  <form method="POST" action="{{ asset('stock/' . $stock->id) }}" >
    <input type="hidden" name="_method" value="PUT">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="alert alert-warning text-dark font-italic"> LIBRO:{{ $stock->libro->titulo }}</div>

    Cantidad Minima: <input type="number" name="txtCantidadMinima" value="{{ $stock->cantidad_minima }}"><br><br>

    Cantidad Actual:  <input type="number" name="txtCantidadActual" value="{{ $stock->cantidad_actual }}"><br><br><br>

    <input type="submit" value="Actualizar Stock" class="btn btn-success">
  </form>
 </div>
  <br><br>

  <a href="/libros/public/stock " class="btn btn-warning">Volver al Listado</a>
@endsection