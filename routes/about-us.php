<!DOCTYPE html>
<html lang="en-US">
<head>
<?php require_once 'layout/head.php'; ?>
<style>
    .testimonials-slider .swiper-pagination-bullet {
    background-color: #0b2644;
    opacity: 0.3;
    width: 10px;
    height: 10px;
    transition: all 0.3s ease;
}
.testimonials-slider .swiper-pagination-bullet-active {
    background-color: #d19220 !important;
    opacity: 1;
    width: 28px;
    border-radius: 9999px;
}
</style>
</head>
<body>
<?php require_once 'layout/navbar.php'; ?>

<section class="relative bg-[#0b2644] text-white pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d19220_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="container relative z-10 text-center">
        <span class="text-[#d19220] font-bold tracking-widest uppercase text-xl md:text-3xl sa-fade-up sa-delay-1 block mb-3">About GK POLYPACK</span>
        <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight sa-fade-up sa-delay-2 text-white mb-6">Pioneering Next-Gen Packaging Solutions</h1>
        <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed sa-fade-up sa-delay-3">
            Since 2010, driving sustainability and engineering excellence in flexible polybag manufacturing for leading brands across India and global markets.
        </p>
    </div>
</section>

<!-- ============================================================= COMPANY STORY SECTION -->
<section class="py-24 bg-white">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 sa-fade-left sa-delay-2">
                <div class="relative">
                    <img src="<?=base_url() ?>assets/images/11.jpg" alt="GK POLYPACK Plant" class="w-full h-[480px] object-cover rounded-2xl shadow-2xl">
                    <div class="absolute -bottom-8 -right-8 bg-[#0b2644] text-white p-8 rounded-2xl shadow-xl hidden sm:block border-l-4 border-[#d19220]">
                        <span class="text-4xl font-extrabold text-[#d19220] block">16+</span>
                        <span class="text-sm tracking-wider uppercase font-semibold text-gray-300">Years of Excellence</span>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6 sa-fade-right sa-delay-2">
                <span class="text-[#d19220] font-bold text-sm md:text-3xl tracking-wider uppercase block mb-3">Our Legacy</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#0b2644] mb-6 leading-snug">
                    From Humble Beginnings to Modern Industrial Manufacturing
                </h2>
                <p class="text-gray-600 text-xl md:text-2xl leading-relaxed mb-6">
                    Established under the banner of <strong>Gopal Krishan Enterprises</strong> in 2010, <strong>GK POLYPACK</strong> started with a single bag-making unit and an uncompromising commitment to precision.
                </p>
                <p class="text-gray-600 text-xl md:text-2xl leading-relaxed mb-8">
                    Today, we have evolved into a high-capacity enterprise with cutting-edge extrusion lines, multilayer lamination, and precision printing machines. We engineer solutions catering to garment, food, retail, and heavy engineering industries, keeping eco-responsibility and ISO-level standards at our core.
                </p>
                <div class="grid grid-cols-2 gap-6 border-t border-gray-100 pt-6">
                    <div>
                        <h4 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-1">State-of-the-Art</h4>
                        <p class="text-gray-500 text-xl md:text-2xl">Advanced high-speed extrusion, printing & pouch-making setup.</p>
                    </div>
                    <div>
                        <h4 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-1">Eco-Responsible</h4>
                        <p class="text-gray-500 text-xl md:text-2xl">Certified compostable, GRS/RCS recycled packaging options.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================= MISSION / VISION / VALUES -->
<section class="py-20 bg-gray-50">
    <div class="container">
        <div class="text-center max-w-2xl mx-auto mb-16 sa-fade-up sa-delay-1">
            <span class="text-[#d19220] font-bold text-sm uppercase tracking-wider block mb-2">Our Foundation</span>
            <h2 class="text-3xl lg:text-4xl font-extrabold text-[#0b2644]">Built on Values, Driven by Purpose</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 sa-fade-up sa-delay-2 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 flex items-center justify-center text-[#d19220] mb-6 text-3xl">
                    <i class="ri-eye-line"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0b2644] mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be the leading and most trusted packaging manufacturing partner globally by developing innovative, circular, and zero-compromise packaging systems.
                </p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 sa-fade-up sa-delay-3 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 flex items-center justify-center text-[#d19220] mb-6 text-3xl">
                    <i class="ri-compass-3-line"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0b2644] mb-4">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    Deliver custom-engineered, durable, and sustainable packaging products that protect brand value, optimize logistical efficiency, and minimize environmental impact.
                </p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-sm border border-gray-100 sa-fade-up sa-delay-4 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 flex items-center justify-center text-[#d19220] mb-6 text-3xl">
                    <i class="ri-shield-check-line"></i>
                </div>
                <h3 class="text-2xl font-bold text-[#0b2644] mb-4">Core Principles</h3>
                <p class="text-gray-600 leading-relaxed">
                    Rigorous quality control, verified material transparency, continuous tech adoption, and on-time industrial delivery benchmarks for all client partnerships.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ============================================================= TESTIMONIALS SECTION -->
<section class="py-24 bg-white overflow-hidden">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 sa-fade-up sa-delay-1">
            <span class="text-[#d19220] font-bold text-sm md:text-base uppercase tracking-widest block mb-3">
                Client Testimonials
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#0b2644] leading-tight">
                Trusted by Industry Leaders Across India
            </h2>
            <p class="text-gray-600 text-lg md:text-xl mt-4 leading-relaxed">
                See what top garment exporters, retail giants, and industrial manufacturers say about our packaging precision and reliability.
            </p>
        </div>

        <!-- Testimonials Swiper Slider -->
        <div class="swiper testimonials-slider py-4">
            <div class="swiper-wrapper">

                <!-- Card 1 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8 md:p-10 flex flex-col justify-between h-full hover:shadow-xl transition-all duration-300 hover:border-[#d19220]/40 group">
                        <div>
                            <!-- Star Rating & Quote Icon -->
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex text-[#d19220] text-xl gap-1">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="text-4xl text-[#0b2644]/15 group-hover:text-[#d19220]/30 transition-colors">
                                    <i class="ri-double-quotes-r"></i>
                                </span>
                            </div>
                            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8">
                                "GK POLYPACK has been our primary polybag partner for our export shipments. Their GRS certified bags and customized printing quality have helped us clear international compliance audits seamlessly."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-200/70 pt-6">
                            <div class="w-14 h-14 rounded-full bg-[#0b2644] text-[#d19220] flex items-center justify-center font-bold text-xl uppercase shrink-0">
                                RK
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-[#0b2644] leading-tight">Rajesh Kumar</h4>
                                <p class="text-sm font-medium text-gray-500">Supply Chain Head, Garment Exports</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8 md:p-10 flex flex-col justify-between h-full hover:shadow-xl transition-all duration-300 hover:border-[#d19220]/40 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex text-[#d19220] text-xl gap-1">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="text-4xl text-[#0b2644]/15 group-hover:text-[#d19220]/30 transition-colors">
                                    <i class="ri-double-quotes-r"></i>
                                </span>
                            </div>
                            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8">
                                "Switching to their CPCB-certified compostable packaging was a big milestone for our retail brand. Zero tearing issues, uniform gauge thickness, and on-time bulk delivery every month."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-200/70 pt-6">
                            <div class="w-14 h-14 rounded-full bg-[#0b2644] text-[#d19220] flex items-center justify-center font-bold text-xl uppercase shrink-0">
                                AS
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-[#0b2644] leading-tight">Amit Sharma</h4>
                                <p class="text-sm font-medium text-gray-500">Procurement Manager, Retail Chain</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8 md:p-10 flex flex-col justify-between h-full hover:shadow-xl transition-all duration-300 hover:border-[#d19220]/40 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex text-[#d19220] text-xl gap-1">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="text-4xl text-[#0b2644]/15 group-hover:text-[#d19220]/30 transition-colors">
                                    <i class="ri-double-quotes-r"></i>
                                </span>
                            </div>
                            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8">
                                "We order blue VCI anti-rust bags for automotive metal components. Since partnering with GK POLYPACK, zero transit corrosion issues have been reported from our export clients."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-200/70 pt-6">
                            <div class="w-14 h-14 rounded-full bg-[#0b2644] text-[#d19220] flex items-center justify-center font-bold text-xl uppercase shrink-0">
                                VS
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-[#0b2644] leading-tight">Vikas Singhania</h4>
                                <p class="text-sm font-medium text-gray-500">Director of Operations, Auto Components</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide h-auto">
                    <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8 md:p-10 flex flex-col justify-between h-full hover:shadow-xl transition-all duration-300 hover:border-[#d19220]/40 group">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex text-[#d19220] text-xl gap-1">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <span class="text-4xl text-[#0b2644]/15 group-hover:text-[#d19220]/30 transition-colors">
                                    <i class="ri-double-quotes-r"></i>
                                </span>
                            </div>
                            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-8">
                                "High-clarity BOPP and slider zipper pouches with flawless sealing. Their in-house technical team understands exact custom gauge requirements without back-and-forth delays."
                            </p>
                        </div>
                        <div class="flex items-center gap-4 border-t border-gray-200/70 pt-6">
                            <div class="w-14 h-14 rounded-full bg-[#0b2644] text-[#d19220] flex items-center justify-center font-bold text-xl uppercase shrink-0">
                                NP
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-[#0b2644] leading-tight">Neha Patel</h4>
                                <p class="text-sm font-medium text-gray-500">Packaging Head, Consumer Goods</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Custom Navigation Dots -->
            <div class="swiper-pagination mt-10 !relative"></div>
        </div>
    </div>
</section>
<!-- ============================================================= STATS BANNER -->
<div class="stats-banner">
    <div class="container">
        <div class="stats-banner__inner">
            <div class="stats-banner__item sa-fade-up sa-delay-1">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/>
                </svg>
                <span class="stats-banner__number" data-counter data-target="2010" data-start="1995" data-duration="1800">2010</span>
                <span class="stats-banner__label">Year Established</span>
            </div>
            <div class="stats-banner__item sa-fade-up sa-delay-2">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                </svg>
                <span class="stats-banner__number" data-counter data-target="250" data-start="0" data-duration="1400" data-suffix="+">0</span>
                <span class="stats-banner__label">Renowned Clients</span>
            </div>
            <div class="stats-banner__item sa-fade-up sa-delay-3">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6h-2.18c.07-.44.18-.86.18-1.3C18 2.12 15.88 0 13.3 0c-1.3 0-2.4.5-3.2 1.4L12 4.38 13.9 2.5c.4-.4.9-.5 1.4-.5 1.28 0 2.3 1.02 2.3 2.3 0 .82-.5 1.52-1.1 2.06L13 8.8V10h7v8h-2v2h4V8c0-1.1-.9-2-2-2zM2 6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2H2zm7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H3l3-4 2 3 3-4 4 5z"/>
                </svg>
                <span class="stats-banner__number" data-counter data-target="15" data-start="0" data-duration="1200" data-suffix="+">0</span>
                <span class="stats-banner__label">Product Categories</span>
            </div>
            <div class="stats-banner__item sa-fade-up sa-delay-4">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                </svg>
                <span class="stats-banner__number">ISO</span>
                <span class="stats-banner__label">9001:2015 Certified</span>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>
<?php require_once 'layout/scripts.php'; ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.testimonials-slider', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: 24,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 28,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                },
            }
        });
    }
});
</script>
</body>
</html>