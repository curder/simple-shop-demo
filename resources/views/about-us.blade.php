<x-layouts.app>
    <x-slot:title>@lang('about-us.title')</x-slot:title>

    <div class="container mx-auto p-4 mt-6">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="{{ route('index') }}" class="hover:text-blue-600">@lang('header.index')</a>
            <span class="px-2">/</span>
            <span class="text-gray-700">@lang('about-us.name')</span>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-3xl font-bold mb-6 text-gray-900">@lang('about-us.name')</h1>

            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">@lang('about-us.brand_story')</h2>
                    <p class="text-gray-700 leading-relaxed">@lang('about-us.brand_story_description')</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">@lang('about-us.our_mission')</h2>
                    <p class="text-gray-700 leading-relaxed">@lang('about-us.our_mission_description')</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">@lang('about-us.quality_promise')</h2>
                    <p class="text-gray-700 leading-relaxed">@lang('about-us.quality_promise_description')</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">@lang('about-us.service_philosophy')</h2>
                    <p class="text-gray-700 leading-relaxed">@lang('about-us.service_philosophy_description')</p>
                </div>

                <div class="border-t pt-6">
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">@lang('about-us.our_team')</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        @foreach(__('about-us.our_team_list') as $team)
                            <div class="text-center">
                                <div class="w-32 h-32 mx-auto rounded-full overflow-hidden bg-gray-300 dark:bg-gray-700">
                                    <img src="{{ $team['cover'] }}" alt="{{ $team['title'] }}"
                                         class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-xl font-semibold mt-3 text-gray-800">{{ $team['name'] }}</h3>
                                <p class="text-gray-600">{{ $team['title'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>