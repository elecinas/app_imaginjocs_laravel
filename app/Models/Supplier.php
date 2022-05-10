<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded = [''];
    
    public function products() 
    {
        return $this->belongsToMany(Product::class, 'product_supplier', 'supplier_id', 'product_id')
                ->withPivot('id')
                ->withPivot('order_day')
                ->withPivot('product_quantity')
                ->withTimestamps();
    }
}
