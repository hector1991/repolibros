<?php
namespace App\Model;
use App\Model\DetalleFactura;
use Illuminate\Database\Eloquent\Model;
class Factura extends Model
{
    protected $table = 'factura';
    public function obtenerTotal()
    {
    	$detalle_list = DetalleFactura::where('factura_id', $this->id)->get();
    	$total = 0;
    	foreach ($detalle_list as $detalle) {
    		$subtotal = $detalle->precio * $detalle->cantidad;
    	    $total = $total + $subtotal;
    	}
    	return $total;
    }
    public function cliente()
    {
    	return $this->belongsTo('App\Model\Cliente');
    }
}