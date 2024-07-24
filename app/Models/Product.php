<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Str;
use App\Models\ProductDetails;

class Product extends Model
{
    use HasFactory;

    public function productDetails()
    {
        return $this->hasOne(ProductDetails::class);
    }

    protected $fillable = [
        'admin',
        'username',
        'name_product',
        'name_localbrand',
        'price',
        'discount',
        'image',
        'category_people',
        'category_shoes',
        'slug',
        'link_shoes'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->name_product);
        });

        static::updating(function ($product) {
            $product->slug = Str::slug($product->name_product);
        });
    }
}
