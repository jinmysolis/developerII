<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';
    protected $primaryKey ='id';

    protected $fillable = [
       'id','name', 'price', 'marks_id','image'
    ];
    
   public function mark()
   {
       return $this->hasMany(Mark::class);
   }
}
