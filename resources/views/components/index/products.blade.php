<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">@lang('index.featured_products')</h2>
        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
                <li class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <a wire:navigate href="{{ $product->url }}">
                        <img src="{{ $product->primary_image_url }}"
                             alt="{{ $product->name }}" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-wrap text-ellipsis">{{ $product->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-semibold">¥{{ $product->price }}</span>
                            <a wire:navigate href="{{ $product->url }}"
                               class="text-blue-600 hover:text-blue-800 font-semibold">@lang('index.featured_products_show_more_button')
                                →</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

