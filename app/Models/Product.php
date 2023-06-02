<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $fillable =['product_name','category_id','price'];

    public function category(){
        return $this->belongsTo(Category::class);
     }

     public function owners(){
         return $this->belongsToMany(Owner::class);//في وسيط تاني اذا جدول المشترك ماسميتو متل مو  معترف بلارفيل
      }
}
