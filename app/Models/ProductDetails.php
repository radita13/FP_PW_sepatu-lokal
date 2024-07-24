<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image_1_header',
        'image_2_header',
        'image_3_header',
        'image_1',
        'image_2',
        'image_3',
        'description',
        'specification',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
