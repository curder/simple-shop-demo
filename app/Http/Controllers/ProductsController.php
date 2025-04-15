<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Contracts\View\View;

class ProductsController extends Controller
{
    public function show(Product $product): View
    {
        $product = Product::with([
            'images',
            'variants.values.option',
            'productOptions.values.variants',

        ])->published()->find($product->id);

        $images = $product->images->sortByDesc(fn ($image) => Arr::get($image, 'custom_properties.primary'));

        return view('products.show', compact('product', 'images'));
    }
}
