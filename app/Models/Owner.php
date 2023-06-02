<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected  $fillable =['owner_name'];

    public function products(){
        return $this->belongsToMany(Product::class);//في وسيط تاني اذا جدول المشترك ماسميتو متل مو  معترف بلارفيل
     }
}
