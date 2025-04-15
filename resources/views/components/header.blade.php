<header id="static-header" class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="{{ route('index') }}" class="flex items-center">
                <svg class="h-8 w-8 text-blue-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- 道服轮廓 -->
                    <path d="M4 4H20V20H4V4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <!-- 腰带 -->
                    <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <!-- 空手道动作 -->
                    <path d="M12 4L12 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M8 8L16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <path d="M16 8L8 16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span class="ml-2 text-xl font-bold text-gray-800">空手道服装商城</span>
            </a>
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('index') }}" class="text-gray-600 hover:text-blue-600">首页</a>
                <a href="about.html" class="text-gray-600 hover:text-blue-600">关于我们</a>
                <a href="contact.html" class="text-gray-600 hover:text-blue-600">联系方式</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>