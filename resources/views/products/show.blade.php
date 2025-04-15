<x-layouts.app>
    <x-slot:title>产品详情</x-slot:title>

    <div class="container mx-auto p-4 mt-6">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="{{ route('index') }}" class="hover:text-blue-600">首页</a>
            <span class="px-2">/</span>
            <span class="text-gray-700">{{ $product->name }}</span>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- 左侧图片轮播 -->
                @include('products.partials.carousel', ['images' => $images])

                <!-- 右侧商品信息 -->
                <livewire:product.right-info :product="$product"/>
            </div>

            <!-- 详细信息部分 -->
            @if($product->body)
                <div class="mt-12">
                    <h3 class="text-xl font-semibold mb-4 pb-2 border-b text-gray-800">
                        详细信息</h3>
                    <div class="space-y-6 text-gray-700">
                        {!! $product->body !!}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- 支付二维码弹窗 -->
    <div id="paymentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">扫码支付</h2>
                <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="text-center">
                <div class="mb-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://example.com/pay/123456"
                         alt="支付二维码" class="mx-auto">
                </div>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
                    <p class="font-bold">开发测试中</p>
                    <p>当前为测试环境，请勿进行实际支付操作！</p>
                </div>
                <p class="text-gray-600 mb-2">请使用微信或支付宝扫码支付</p>
                <p class="text-xl font-bold text-blue-600">¥299</p>
                <p class="text-sm text-gray-500 mt-4">支付完成后，我们将尽快为您发货</p>
            </div>
        </div>
    </div>
</x-layouts.app>
