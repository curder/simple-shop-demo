<x-layouts.app>
    <x-slot:title>@lang('contact-us.title')</x-slot:title>
    <div class="container mx-auto p-4 mt-6">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="{{ route('index') }}" class="hover:text-blue-600">@lang('header.index')</a>
            <span class="px-2">/</span>
            <span class="text-gray-700">@lang('contact-us.name')</span>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-3xl font-bold mb-6 text-gray-900">@lang('contact-us.name')</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- 联系方式 -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">@lang('contact-us.contact_info')</h2>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span class="text-gray-700">@lang('contact-us.contact_info_list.phone')</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="text-gray-700">@lang('contact-us.contact_info_list.email')</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="h-6 w-6 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-gray-700">@lang('contact-us.contact_info_list.address')</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">@lang('contact-us.business_hours')</h2>
                        <ul class="space-y-2">
                            @foreach(__('contact-us.business_hours_list') as $key => $value)
                                <li class="flex">
                                    <span class="text-gray-700">{{ $key }}:</span>
                                    <span class="text-gray-700 ml-4">{{$value}}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">@lang('contact-us.follow_us')</h2>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-600 hover:text-blue-600">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                            d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.164 6.839 9.49.5.092.682-.217.682-.48 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.155-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.268 2.75 1.026A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.026 2.747-1.026.546 1.377.202 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.841-2.337 4.687-4.565 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-blue-600">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                            d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-blue-600">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-600 hover:text-blue-600">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                            d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 留言表单 -->
                <div>
                    <h2 class="text-2xl font-semibold mb-4 text-gray-800">@lang('contact-us.message')</h2>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-700 mb-1">@lang('contact-us.message_name')</label>
                            <input type="text" id="name" name="name"
                                   placeholder="@lang('contact-us.message_name_placeholder')"
                                   class="w-full px-4 py-2 border rounded-md bg-white border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email"
                                   class="block text-gray-700 mb-1">@lang('contact-us.message_email')</label>
                            <input type="email" id="email" name="email"
                                   placeholder="@lang('contact-us.message_email_placeholder')"
                                   class="w-full px-4 py-2 border rounded-md bg-white border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="phone"
                                   class="block text-gray-700 mb-1">@lang('contact-us.message_phone')</label>
                            <input type="tel" id="phone" name="phone"
                                   placeholder="@lang('contact-us.message_phone_placeholder')"
                                   class="w-full px-4 py-2 border rounded-md bg-white border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 mb-1">@lang('contact-us.message')</label>
                            <textarea id="message" name="message" rows="5"
                                      placeholder="@lang('contact-us.message_placeholder')"
                                      class="w-full px-4 py-2 border rounded-md bg-white border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit"
                                class="w-full bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded transition-colors">
                            @lang('contact-us.send')
                        </button>
                    </form>
                </div>
            </div>

            <!-- 地图 -->
            <div class="mt-10">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">@lang('contact-us.our_location')</h2>
                <div class="w-full h-96 bg-gray-200 rounded">
                    <!-- 这里可以嵌入真实的地图，为了演示使用占位符 -->
                    <div class="w-full h-full flex items-center justify-center">
                        <p class="text-gray-500">@lang('contact-us.location_description')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>