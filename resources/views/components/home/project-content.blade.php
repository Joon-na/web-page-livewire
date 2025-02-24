<section class="flex flex-col justify-center items-center bg-[#1D4734] py-16">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center mb-16 px-6">
        <div class="flex flex-col md:flex-row gap-x-7 items-center text-center md:text-left">
            <img class="w-[100px] h-[100px] md:w-[122px] md:h-[122px]" src="/images/about-logo.svg" alt="the project-logo">
            <h1 class="text-white font-satoshi text-[32px] md:text-[44px] font-medium">The Project</h1>
        </div>
        <div class="w-full md:w-[400px] text-white mt-4 md:mt-0 text-center md:text-left">
            <p>
                Together, we can conquer challenges, utilize our strengths,
                and achieve remarkable success in this ambitious home project.
            </p>
        </div>
    </div>
    {{-- <div class="carousel w-3/4 py-20 relative">
        <div id="item1" class="carousel-item relative w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                class="w-full rounded-xl" />
            <div class="absolute left-1/2 bottom-[-45px] flex -translate-x-1/2 translate-y-1/2 space-x-4">
                <a href="#item4"><img class="w-16" src="/images/arrow-left.png" alt="arrow-left"></a>
                <a href="#item2"><img class="w-16" src="/images/arrow-right.png" alt="arrow-right"></a>
            </div>
        </div>
        <div id="item2" class="carousel-item relative w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                class="w-full rounded-xl" />
            <div class="absolute left-1/2 bottom-[-45px] flex -translate-x-1/2 translate-y-1/2 space-x-4">
                <a href="#item1"><img class="w-16" src="/images/arrow-left.png" alt="arrow-left"></a>
                <a href="#item3"><img class="transform w-16 rotate-180" src="/images/arrow-left.png" alt="arrow-left"></a>
            </div>
        </div>
        <div id="item3" class="carousel-item relative w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                class="w-full rounded-xl" />
            <div class="absolute left-1/2 bottom-[-45px] flex -translate-x-1/2 translate-y-1/2 space-x-4">
                <a href="#item2"><img class="w-16" src="/images/arrow-left.png" alt="arrow-left"></a>
                <a href="#item4"><img class="transform w-16 rotate-180" src="/images/arrow-left.png" alt="arrow-left"></a>
            </div>
        </div>
        <div id="item4" class="carousel-item relative w-full">
            <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                class="w-full rounded-xl" />
            <div class="absolute left-1/2 bottom-[-45px] flex -translate-x-1/2 translate-y-1/2 space-x-4">
                <a href="#item3"><img class="w-16" src="/images/arrow-left.png" alt="arrow-left"></a>
                <a href="#item1"><img class="transform w-16 rotate-180" class="transform rotate-180" src="/images/arrow-left.png" alt="arrow-left"></a>
            </div>
        </div>
    </div> --}}

    <div class="relative w-[500px] md:w-[1200px] h-[120px] mb-[120px] mx-auto">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center"><img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp" alt=""></div>
                <div class="swiper-slide flex justify-center items-center"><img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp" alt=""></div>
                <div class="swiper-slide flex justify-center items-center"><img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp" alt=""></div>
                <div class="swiper-slide flex justify-center items-center"><img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp" alt=""></div>
            </div>
        </div>
    
        <div class="absolute bottom-[-80px] md:bottom-[-150px] left-1/2 transform -translate-x-1/2 flex justify-between w-32">
            <div class="swiper-button-prev-custom flex items-center justify-center w-14"><img src="/images/arrow-left.png" alt=""></div>
            <div class="swiper-button-next-custom flex items-center justify-center w-14"><img src="/images/arrow-right.png" alt=""></div>
        </div>
    </div>
    
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
    });
</script>
