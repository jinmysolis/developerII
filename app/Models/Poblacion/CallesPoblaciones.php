<?php

namespace App\Models\Poblacion;

use Illuminate\Database\Eloquent\Model;

class CallesPoblaciones extends Model
{
    //
   protected $table= 'callespoblaciones';
   protected $primarykey = 'idCalle';
   public $timestamps = false;

   protected  $fillable= [
		'idCalle', 'CodPoblacion', 'Nombre', 'CodPostal'
   ];


}
