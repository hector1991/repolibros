<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Libros;
use App\Model\Proveedores;

class LibroController extends Controller

{


public function index() 


    {

       $libros_list = Libros::all();

       return view("libros.index", ["libros_list" => $libros_list]);

    } 

public function create()

    {

      $proveedores = Proveedores::all();
      	return view("libros.create", compact('proveedores'));

    }

      


public function store(Request $request)

      {
         //obtener datos enviados desde el formulario
      	$titulo = $request->input("txttitulo");
      	$editorial = $request->input("txteditorial");
        $autor = $request->input("txtautor");
        $fechaedicion = $request->input("txtfechaedicion");
        $tapa = $request->input("txttapa");
        $genero = $request->input("txtgenero");
        $precio = $request->input("numprecio");
        $proveedorid = $request->input("proveedor_id");
        
        
        
        // crear nuevo libro
        $libro = new Libros();
        $libro->titulo = $titulo;
        $libro->editorial = $editorial;
        $libro->autor = $autor;
        $libro->fecha_edicion = $fechaedicion;
        $libro->tipo_tapa = $tapa;
        $libro->genero = $genero;
        $libro->precio = $precio;
        $libro->proveedor_id = $proveedorid;
        $libro->save();



        $mensaje = "LIBRO AGREGADO CORRECTAMENTE";
        return redirect("libros/create")->with("mensaje", $mensaje);


                                      }
        //$proveedor = new Proveedores();
       // $proveedor->libro_id = $libro->id;
        //$proveedor->save();

        public function show($id)

      {
        $libro= Libros::find($id);
        return view("libros.show", ["libro"=>$libro]);

      }
      public function destroy($id)
      {
       $libros = Libros::find($id);
      
       $libros->delete();
     

        $mensaje = "LIBRO BORRADO EXITOSAMENTE!";
        return redirect("libros")->with("mensaje", $mensaje);

      }

      public function edit($id) 

      {
         $libro = Libros::find($id);
          return view("libros.edit", ["libro"=>$libro]);
           $proveedores = Proveedores::all();
        return view("libros.edit");
           
           

          




       }

       public function update(Request $request, $id){

        //obtener datos enviados desde el formulario
        $titulo = $request->input("txttitulo");
        $editorial = $request->input("txteditorial");
        $autor = $request->input("txtautor");
        $fechaedicion = $request->input("txtfechaedicion");
        $tapa = $request->input("txttapa");
        $genero = $request->input("txtgenero");
        $precio = $request->input("numprecio");
        $proveedorid = $request->input("proveedor_id");

        

        $libro = Libros::find($id);

        $libro->titulo=$titulo;
        $libro->editorial=$editorial;
        $libro->autor=$autor;
        $libro->fecha_edicion = $fechaedicion;
        $libro->tipo_tapa = $tapa;
        $libro->genero = $genero;
        $libro->precio = $precio;
        $libro->proveedor_id = $proveedorid;
        $libro->save();

         $mensaje = "CLIENTE MODIFICADO CORRECTAMENTE";
        return redirect("libros/" . $id . "/edit")->with("mensaje", $mensaje);
        //$cliente->save();

       }


      	
      }


?>