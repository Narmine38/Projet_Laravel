<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
