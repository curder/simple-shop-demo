<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function show(Product $product)
    {
        dd($product);
    }
}
