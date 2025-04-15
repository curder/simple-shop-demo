<?php

namespace App\View\Components\Index;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Products extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        $fields = '*'; // ['name', 'description'];
        $limit = 4;
        $products = Product::with(['media'])
            ->select($fields)
            ->limit($limit)
            ->published()
            ->orderByDesc('id')
            ->get();

        return view('components.index.products', compact('products'));
    }
}
