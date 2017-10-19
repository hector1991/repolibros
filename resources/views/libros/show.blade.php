Libro: {{ $libro->titulo}}, {{ $libro->autor}}

<br><br>
<form method="POST" action="{{ asset ('libros/' . $libro->id )}}">
{{ method_field('DELETE')}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" name="Eliminar">

	


</form>