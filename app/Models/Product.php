<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $teble = 'products';
    protected $fillable = ['name','image','detail','price'];

    public function type_products()
    {
        return $this->belongsTo(TypeProduct::class, 'id_type_product', 'id');
    }
}