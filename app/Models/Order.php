<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product_id',
        'amount',
        'final_price',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function safe()
    {
        return $this->belongsTo(Safe::class);
    }

    public static function getProductsList()
    {
        return Product::select('id', 'product_name', 'product_price', 'product_discount','product_final_price')
            ->get()
            ->mapWithKeys(function ($product) {
                return [$product['id'] => $product->toArray()];
            });
    }
    public static function getProductById($productId)
    {
        return Product::select('id', 'product_name', 'product_price', 'product_discount', 'product_final_price')
            ->where('id', $productId)
            ->first();
    }
}
