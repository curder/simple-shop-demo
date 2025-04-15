<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\ProductOption;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class RightInfo extends Component
{
    public Product $product;

    public float $price;

    public array|Collection $options = [];

    public array $matrix = [];

    public array $selectedValues = [];

    public $currentVariant = null;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->price = $product->price;
        $this->getOptions();
        //        dd($this->options, $this->matrix);
    }

    public function updateSelectedValues(int $group_id, int $value_id): void
    {
        $this->selectedValues[$group_id] = $value_id;
        ray($this->selectedValues, $this->matrix);
        // 计算当前选项的价格，库存
        $key = collect($this->selectedValues)->sort()->join('_');
        $this->currentVariant = $this->matrix[$key] ?? null;
        ray($this->currentVariant);
    }

    public function getOptions(): void
    {
        $this->options = $this->product->productOptions->mapWithKeys(function (ProductOption $option) {
            ray($option);

            return [
                $option->id => [
                    'id' => $option->id,
                    'name' => $option->name,
                    'values' => $option->values
                        // 存在变体才展示
                        ->filter(
                            fn ($value) => $value->variants->count()
                        )
                        ->map(fn ($value) => [
                            'id' => $value->id,
                            'name' => $value->name,
                        ]),
                ],
            ];
        });

        foreach ($this->product->variants as $variant) {
            $key = $variant->values->sortBy('option_id')
                ->pluck('id')
                ->join('_');
            $this->matrix[$key] = [
                'price' => $variant->price, // 直接访问字段
                'stock' => $variant->stock,
                'in_stock' => $variant->in_stock,
                'sku' => $variant->sku,
                'formatted_price' => $variant->price_formatted, // 使用访问器
            ];
        }
    }

    public function render(): View
    {
        return view('livewire.product.right-info');
    }
}
