<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use HasFactory;
    use softDeletes;
    protected $fillable = ['name', 'price', 'description', 'stock','category_id'];
   //protected $table = "product";


   public function Category(){
    return $this->belongsTo(Category::class);
   }

   public function Tags(){
    return $this->belongsToMany(Tag::class);
}
}
