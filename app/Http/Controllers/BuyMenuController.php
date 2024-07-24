<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetails;

class BuyMenuController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        $productDetails = $product->productDetails;

        $brand = strtolower(str_replace(' ', '_', $product->name_localbrand));
        $viewName = "buymenu.buymenu_{$brand}.buymenu_{$brand}";

        if (view()->exists($viewName)) {
            return view($viewName, compact('product', 'productDetails'));
        } else {
            abort(404, 'View not found.');
        }
    }
}
