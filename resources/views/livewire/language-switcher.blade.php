<div class="flex items-center">
    @if($prefix)
        <span class="text-gray-600 text-sm mr-2">@lang('footer.language'):</span>
    @endif
    <select wire:model.live.debounce="currentLocale"
            class="text-sm text-gray-600 border border-gray-300 bg-white rounded px-2 py-1">
        <option value="zh-CN" selected>简体中文</option>
        <option value="en">English</option>
    </select>
</div>