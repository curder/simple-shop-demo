<div class="w-full md:w-1/2">
    <div class="carousel mb-4">
        <div class="carousel-inner">
            @foreach($images as $image)
                <div class="carousel-item">
                    <img src="{{ $image->getUrl() }}"
                         alt="{{ $image->getCustomProperty('name') }}"
                         class="w-full h-96 object-cover rounded">
                </div>
            @endforeach
        </div>
        <button
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r"
                onclick="prevSlide()">❮
        </button>
        <button
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l"
                onclick="nextSlide()">❯
        </button>
    </div>
    <!-- 缩略图预览 -->
    <div class="flex gap-2 justify-center">
        @foreach($images as $image)
            <div class="thumbnail w-20 h-20 rounded overflow-hidden"
                 onclick="showSlide({{ $loop->index }})">
                <img src="{{ $image->hasGeneratedConversion('small') ? $image->getUrl('small'): $image->getUrl() }}"
                     alt="{{ $image->getCustomProperty('name') }}" class="w-full h-full object-cover">
            </div>
        @endforeach
    </div>
</div>