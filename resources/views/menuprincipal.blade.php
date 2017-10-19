

<!DOCTYPE html>
<html>
<head>


	<title></title>
	

   

<link href="{{ asset ('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">



  
</head>
<body>

<div align="center">
    <div class="alert alert-success">
	    <div align="left" class="badge badge-dark mx-sm-5 text-white " ><a class="text-white mx-sm-5 " href="/libros/public/clientes">Clientes</a></div>
	    <div align="center" class="badge badge-dark mx-sm-5"><a class="text-white mx-sm-5" href="/libros/public/proveedores">Proveedores</a></div>
	    <div align="right" class="badge badge-dark mx-sm-5"><a class="text-white mx-sm-5" href="/libros/public/libros">Libros</a></div>
    
</div>
    <br>
    <br>

    
	@yield('content')
 
</body>
</html>