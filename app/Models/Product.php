<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [''];
    
    public function suppliers() 
    {
        return $this->belongsToMany(Supplier::class, 'product_supplier', 'product_id', 'supplier_id')
                ->withPivot('id')
                ->withPivot('order_day')
                ->withPivot('product_quantity')
                ->withTimestamps();
    }
}
