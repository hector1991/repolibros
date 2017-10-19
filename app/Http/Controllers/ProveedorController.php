<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Proveedores;
use App\Model\Libros;


class ProveedorController extends Controller

{


public function index() 


    {

       $proveedores_list = Proveedores::all();

       return view("proveedores.index", ["proveedores_list" => $proveedores_list]);

    } 

public function create()

    {
      	return view("proveedores.create");

    }

      


public function store(Request $request)

      {
         //obtener datos enviados desde el formulario
      	$razonsocial = $request->input("txtrazonsocial");
      	$domicilio = $request->input("txtdomicilio");
        $email = $request->input("txtemail");
        $celular = $request->input("numcelular");
        $telefono = $request->input("numtelefono");
        
        
        
        // crear nuevo proveedor
        $proveedor = new Proveedores();
        $proveedor->razon_social = $razonsocial;
        $proveedor->domicilio = $domicilio;
        $proveedor->email = $email;
        $proveedor->celular = $celular;
        $proveedor->telefono_fijo = $telefono;
        $proveedor->save();

        //$libro = new Libros();
       // $libro->proveedor_id = $proveedor->id;
      //  $libro->save()
      	
      }
      public function show($id)

      {
        $proveedor= Proveedores::find($id);
        return view("proveedores.show", ["proveedor"=>$proveedor]);

      }
      public function destroy($id)
      {
       $proveedor = Proveedores::find($id);
       $libros=Libros::where("proveedor_id", $proveedor);
       foreach ($libros as $libro)
       {
         
         $libro->delete();

       }
       

        $mensaje = "CLIENTE BORRADO!";
        return redirect("proveedores")->with("mensaje", $mensaje);

      }

}
?>