<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
     protected $table ='marks';
      protected $primaryKey ='id';

    protected $fillable = [
       'id','name'
    ];

public function produt()
   {
       return $this->belongsTo(Product::class);
   }


}
