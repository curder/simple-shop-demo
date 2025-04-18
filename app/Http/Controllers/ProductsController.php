<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class ProductsController extends Controller
{
    public function show(Product $product): View
    {
        abort_if($product->status !== ProductStatus::Published, 403);

        $product = Product::with([
            'images',
            'variants.values.option',
            'productOptions.values.variants',

        ])->published()->find($product->id);

        $images = $product->images->sortByDesc(fn ($image) => Arr::get($image, 'custom_properties.primary'));

        return view('products.show', compact('product', 'images'));
    }
}
