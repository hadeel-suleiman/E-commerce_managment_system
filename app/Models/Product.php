<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;


         protected $fillable =[
         'name' , 'description', 'price' , 'quantity'
     ];

     public function categories(){
         return $this->belongsToMany(Category::class, 'category_product','product_id','category_id');
     }
     public function orders(){
         return $this->hasMany(Order::class);
     }
}
