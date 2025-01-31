<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class Inventory extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'product_id',        
        'stock',
        'operation',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
