<div class="w-full md:w-1/2">
    <h2 class="text-2xl font-semibold mb-4 text-gray-800">{{ $product->name }}</h2>
    <div class="space-y-6">
        <div class="hidden flex items-center text-sm text-gray-500 mb-2">
            <span class="mr-4">SKU: KF-2024-001</span>
            <span class="text-green-600">@lang('product.availability')</span>
        </div>
        <div class="flex items-center text-sm text-gray-500 mb-4">
            <span class="mr-4">@lang('product.sales_volume'): 1289</span>
            <span class="mr-4">@lang('product.customer_ratings'): 4.9/5.0</span>
            <span>@lang('product.wishlist'): 256</span>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-2 text-gray-800">@lang('product.product_description')</h3>
            <p class="text-gray-700">{{ $product->description }}</p>
        </div>

        @if($product->feature)
            <div class="border-t pt-4">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">@lang('product.key_features')：</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    @foreach($product->feature_formatted as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="border-t pt-4">
            <h3 class="text-lg font-semibold mb-2 text-gray-800">@lang('product.pricing')：</h3>
            <div class="flex items-baseline">
                <span class="text-red-600 text-3xl font-bold">¥{{ $this->currentVariant['formatted_price'] ?? $price }}</span>
            </div>
        </div>

        @foreach($options as $option)
            <div class="border-t pt-4">
                <h3 class="text-lg font-semibold mb-2 text-gray-800">{{ $option['name'] }}：</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($option['values'] as $item)
                        @php
                            // 检查当前选项是否已被选中
                            $defaultClasses = 'size-item cursor-pointer px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 hover:border-blue-500';
                            $activeClasses = 'border-blue-600 bg-blue-100';
                            $isSelected = isset($selectedValues[$option['id']]) && $selectedValues[$option['id']] == $item['id'];
                        @endphp
                        <button wire:click.prevent="updateSelectedValues({{$option['id']}}, {{$item['id']}})"
                                @disabled($isSelected)
                                @class([$activeClasses => $isSelected, $defaultClasses])>
                            {{ $item['name'] }}
                            <span class="text-sm text-gray-500"></span>
                        </button>
                    @endforeach
                </div>

            </div>
        @endforeach
        <div class="flex items-center text-sm text-gray-500 mb-2">
            <span class="text-green-600">@lang('product.inventory_status')：{{ $this->currentVariant['stock'] ?? '-' }}</span>
        </div>

        <div class="border-t pt-4">
            <h3 class="text-lg font-semibold mb-2 text-gray-800">@lang('product.qty_selector')：</h3>
            <div class="flex items-center">
                <button class="px-3 py-1 border border-gray-300 rounded-l hover:bg-gray-100"
                        onclick="decrementQuantity()">-
                </button>
                <input type="number" id="quantity" min="1" value="1"
                       class="w-16 px-3 py-1 border-t border-b border-gray-300 text-center focus:outline-none bg-white text-gray-800">
                <button class="px-3 py-1 border border-gray-300 rounded-r hover:bg-gray-100"
                        onclick="incrementQuantity()">+
                </button>
            </div>
        </div>

        <div class="pt-4 flex gap-4">
            <button
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded flex-grow">
                @lang('product.instant_checkout')
            </button>
            <button
                    class="px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded flex-grow">
                @lang('product.add_to_cart')
            </button>
        </div>
    </div>
</div>