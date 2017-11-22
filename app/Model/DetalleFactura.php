<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class DetalleFactura extends Model
{
    protected $table = 'detalle_factura';
    public function obtenerSubTotal()
    {
    	$subtotal = $this->precio * $this->cantidad;
    	return $subtotal;
    }
    public function libro()
    {
    	return $this->belongsTo('App\Model\Libros');
    }
}