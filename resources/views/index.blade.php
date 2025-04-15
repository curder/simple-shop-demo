<x-layouts.app>
    <x-slot:title>空手道服装商城</x-slot>

    <main>
        <!-- 英雄区域 -->
        <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">专业空手道服装与装备</h1>
                    <p class="text-xl mb-8">为每一位空手道爱好者提供高品质的训练服装和装备，助力您的武道之路</p>
                    <a href="#"
                       class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">浏览商品</a>
                </div>
            </div>
        </section>

        <x-index.products/>
        <!-- 特色区域 -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">为什么选择我们</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">优质材料</h3>
                        <p class="text-gray-600">采用高品质面料，确保舒适度和耐用性，让您在训练中保持最佳状态。</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">快速配送</h3>
                        <p class="text-gray-600">全国范围内快速配送，确保您能及时收到心仪的商品。</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">安全支付</h3>
                        <p class="text-gray-600">支持多种支付方式，确保您的交易安全可靠。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 关于我们 -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-8">关于我们</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-600 mb-4">
                            我们是一家专注于空手道服装和装备的专业商城，致力于为空手道爱好者提供高品质的产品和服务。我们的团队由资深空手道教练和服装设计师组成，深谙空手道运动的需求。
                        </p>
                        <p class="text-gray-600 mb-4">
                            我们的产品经过严格的质量把控，选用优质材料，注重细节设计，确保每一件商品都能满足训练和比赛的需求。无论是初学者还是专业选手，都能在这里找到适合自己的装备。
                        </p>
                        <p class="text-gray-600">
                            除了提供优质的产品，我们还提供专业的咨询服务，帮助您选择最适合的装备。我们的目标是成为您空手道之路上的可靠伙伴。
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>