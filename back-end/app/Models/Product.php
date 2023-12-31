<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'product_value',
        'expiration_date',
        'stock_quantity',
        'perishable',
    ];
   
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
