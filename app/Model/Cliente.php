<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model


{
  protected $table = "clientes";

  public function persona()
  {
    return $this->belongsTo("App\Model\Persona");

  }



}
