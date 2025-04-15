<x-layouts.app>
    <x-slot:title>@lang('index.title')</x-slot>

    <main>
        <!-- 英雄区域 -->
        <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">@lang('index.hero_label')</h1>
                    <p class="text-xl mb-8">@lang('index.hero_description')</p>
                    <a href="#"
                       class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition duration-300">@lang('index.hero_button')</a>
                </div>
            </div>
        </section>

        <x-index.products/>
        <!-- 特色区域 -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">@lang('index.why_choose_us')</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">@lang('index.why_choose_us_item_first_label')</h3>
                        <p class="text-gray-600">@lang('index.why_choose_us_item_first_description')</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">@lang('index.why_choose_us_item_second_label')</h3>
                        <p class="text-gray-600">@lang('index.why_choose_us_item_second_description')</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">@lang('index.why_choose_us_item_third_label')</h3>
                        <p class="text-gray-600">@lang('index.why_choose_us_item_third_description')</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 关于我们 -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-8">@lang('index.about_us')</h2>
                    <div class="prose max-w-none">
                        <p class="text-gray-600 mb-4">@lang('index.about_us_first_label')</p>
                        <p class="text-gray-600 mb-4">@lang('index.about_us_second_label')</p>
                        <p class="text-gray-600">@lang('index.about_us_third_label')</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>