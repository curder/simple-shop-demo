// 商品图片轮播
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
const thumbnails = document.querySelectorAll('.thumbnail');

window.showSlide = (n) => {
    const carousel = document.querySelector('.carousel-inner');
    currentSlide = n;
    carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

    // 更新缩略图状态
    thumbnails.forEach((thumb, i) => {
        if (i === currentSlide) {
            thumb.classList.add('active');
        } else {
            thumb.classList.remove('active');
        }
    });
}

window.nextSlide = () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

window.prevSlide = () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

// 数量控制
function incrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    quantityInput.value = parseInt(quantityInput.value) + 1;
}

function decrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    let value = parseInt(quantityInput.value);
    if (value > 1) {
        quantityInput.value = value - 1;
    }
}

// 初始化
document.addEventListener('DOMContentLoaded', function () {
    // 设置初始激活缩略图
    thumbnails[0].classList.add('active');

    // 属性选择
    // const sizeItems = document.querySelectorAll('.size-item');
    // sizeItems.forEach(item => {
    //     item.addEventListener('click', function () {
    //         sizeItems.forEach(si => si.classList.remove('border-blue-500', 'border-2', 'dark:border-blue-400'));
    //         this.classList.add('border-blue-500');
    //     });
    // });
});

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('paymentModal');
    const buyNowBtn = document.querySelector('.px-6.py-3.bg-blue-600');
    const closeModalBtn = document.getElementById('closeModalBtn');

    buyNowBtn.addEventListener('click', function () {
        modal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', function () {
        modal.classList.add('hidden');
    });

    // 点击模态框外部关闭
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
});