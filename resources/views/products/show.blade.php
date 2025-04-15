<x-layouts.app>
    <x-slot:title>@lang('product.title')</x-slot:title>

    <div class="container mx-auto p-4 mt-6">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="{{ route('index') }}" class="hover:text-blue-600">@lang('header.index')</a>
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
                    <h3 class="text-xl font-semibold mb-4 pb-2 border-b text-gray-800">@lang('product.body')</h3>
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
                <h2 class="text-2xl font-bold">@lang('product.payment_modal.header')</h2>
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
                         alt="@lang('product.payment_modal.qr_interface')" class="mx-auto">
                </div>
                <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
                    <p class="font-bold">@lang('product.payment_modal.qr_interface')</p>
                    <p>@lang('product.payment_modal.warning_content')</p>
                </div>
                <p class="text-gray-600 mb-2">@lang('product.payment_modal.payment_options')</p>
                <p class="text-xl font-bold text-blue-600">@lang('product.payment_modal.display_price')</p>
                <p class="text-sm text-gray-500 mt-4">@lang('product.payment_modal.shipping_notice')</p>
            </div>
        </div>
    </div>
</x-layouts.app>
