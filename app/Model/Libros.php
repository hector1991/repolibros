<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
  protected $table = "libros";

  public function proveedor()
  {
    return $this->belongsTo("App\Model\proveedores");

  }

}
