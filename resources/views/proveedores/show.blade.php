Proveedor: {{ $proveedor->razon_social}}

<br><br>
<form method="POST" action="{{ asset ('proveedores/' . $proveedor->id )}}">
{{ method_field('DELETE')}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" name="Eliminar" value="Eliminar">

	


</form>