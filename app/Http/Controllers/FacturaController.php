<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Factura;
use App\Model\Cliente;
use App\Model\Libros;
use App\Model\DetalleFactura;
use App\Model\Stock;






class FacturaController extends Controller
{
    public function index()
    {
        $facturas_list = Factura::all();
        foreach ($facturas_list as $factura) {
            $factura->total = $factura->obtenerTotal();
        }
        return view('facturas.index', ['facturas_list'=>$facturas_list]);
    }

  public function create() 

    {   $clientes_list = Cliente::all();
        return view('facturas.create' , ['clientes_list' => $clientes_list]);

    }

    public function store(Request $request)

      {
         //obtener datos enviados desde el formulario
      	$numero = $request->input("txtnumero");
      	$fecha = $request->input("txtfecha");
        $tipo = $request->input("cbotipo");
        $cliente = $request->input("cbocliente");
      
        // crear nueva persona
        $factura = new Factura();
        $factura->numero = $numero;
        $factura->fecha = $fecha;
        $factura->tipo = $tipo;
        $factura->cliente_id = $cliente;
        
        $factura->save();

  

        $mensaje = "FACTURA CREADA CORRECTAMENTE";
        return redirect("facturas/create")->with("mensaje", $mensaje);

      	
      }

   public function detalleadd($id)
    {
        $factura = Factura::find($id);
        $factura->total = $factura->obtenerTotal();
        $libros_list = Libros::all();
        $detalle_list = DetalleFactura::where('factura_id', $id)->get();
        foreach ($detalle_list as $detalle) {
            $detalle->subtotal = $detalle->obtenerSubTotal();
        }

        return view(
            'facturas.detalleAdd',
            ['factura'=>$factura, 'libros_list'=>$libros_list, 'detalle_list'=>$detalle_list]
        );

    }

   public function detalleaddstore(Request $request, $factura_id)
    {
        $libro_id = $request->input("cboLibro");
        $cantidad = $request->input("txtCantidad");
        $stock = Stock::where('libro_id', $libro_id)->first();

        //if ($cantidad > $stock->cantidad_actual) {
          //  $mensaje = "NO CUENTA CON LA CANTIDAD NECESARIA";
            //return redirect("facturas/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
        //}

        $stock->cantidad_actual = $stock->cantidad_actual - $cantidad;
        $stock->save();
        $libro = Libros::find($libro_id);
        $detalle = new DetalleFactura();
        $detalle->factura_id = $factura_id;
        $detalle->libro_id = $libro_id;
        $detalle->cantidad = $cantidad;
        $detalle->precio = $libro->precio;
        $detalle->save();
        $mensaje = "LIBRO AGREGADO CORRECTAMENTE";
        return redirect("facturas/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
    }
     public function detalledelete($detalle_id)

    {   
    
        $detalle = DetalleFactura::find($detalle_id);
        $factura_id = $detalle->factura_id;
        $detalle->delete();
        
        $mensaje = "ITEM BORRADO.";
        return redirect("facturas/" . $factura_id . "/detalle/add")->with("mensaje", $mensaje);
    }
}