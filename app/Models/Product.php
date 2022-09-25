<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function OrderProduct()
    {
        return $this->belongsTo(OrderProduct::class);
    }


}
