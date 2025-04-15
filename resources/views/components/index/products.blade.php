<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">精选产品</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <a href="{{ $product->url }}">
                        <img src="{{ $product->primary_image_url }}"
                             alt="{{ $product->name }}" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-semibold">¥{{ $product->price }}</span>
                            <a href="{{ $product->url }}" class="text-blue-600 hover:text-blue-800 font-semibold">查看详情
                                →</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <a href="product.html">
                    <img src="https://images.unsplash.com/photo-1600185365926-3a2f3f5b4f8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                         alt="空手道护具套装" class="w-full h-48 object-cover">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">空手道护具套装</h3>
                    <p class="text-gray-600 mb-4">包含头盔、护胸、护手、护腿，全方位保护，安全可靠。</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-semibold">¥599</span>
                        <a href="product.html" class="text-blue-600 hover:text-blue-800 font-semibold">查看详情
                            →</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <a href="product.html">
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                         alt="空手道训练靶" class="w-full h-48 object-cover">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">空手道训练靶</h3>
                    <p class="text-gray-600 mb-4">高密度泡沫材质，耐用防滑，适合各种打击训练。</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-semibold">¥199</span>
                        <a href="product.html" class="text-blue-600 hover:text-blue-800 font-semibold">查看详情
                            →</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <a href="product.html">
                    <img src="https://images.unsplash.com/photo-1600185365926-3a2f3f5b4f8d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                         alt="空手道腰带套装" class="w-full h-48 object-cover">
                </a>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">空手道腰带套装</h3>
                    <p class="text-gray-600 mb-4">包含白带至黑带所有段位腰带，优质面料，颜色持久。</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 font-semibold">¥399</span>
                        <a href="product.html" class="text-blue-600 hover:text-blue-800 font-semibold">查看详情
                            →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

