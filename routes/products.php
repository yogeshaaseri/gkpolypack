<!DOCTYPE html>
<html lang="en-US">
<head>
<?php require_once 'layout/head.php'; ?>
<style>
    .sp-main-title {
        font-size: clamp(2.25rem, 4vw, 3.5rem) !important; 
        font-weight: 800 !important;
        color: #0b2644 !important;
        line-height: 1.2 !important;
    }
    .sp-desc-text {
        /* Mobile pe 1.1rem aur PC pe 1.25rem */
        font-size: 16px !important; 
        line-height: 1.8 !important;
        color: #334155 !important;
    }
    .sp-section-heading {
        font-size: clamp(1.75rem, 3vw, 2.5rem) !important;
        font-weight: 800 !important;
        color: #0b2644 !important;
    }
    .feature-box {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        font-size: clamp(1.1rem, 2vw, 1.25rem); /* Bada font size */
        font-weight: 600;
        color: #0b2644;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
    }
    .feature-box:hover {
        border-color: #d19220;
        transform: translateX(4px);
    }
    .sidebar-link {
        font-size: clamp(1.1rem, 2vw, 1.2rem); /* Links ka size bada kiya */
        font-weight: 700;
        color: #db982a;
        transition: all 0.2s ease;
    }
    .sidebar-link:hover {
        color: #b87c1a;
        padding-left: 6px;
    }
</style>
</head>
<body class="single-product page-template-default">
<?php require_once 'layout/navbar.php'; ?>
<section class="relative bg-[#0b2644] text-white pt-28 pb-20 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d19220_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="container relative z-10">
        <div class="flex flex-wrap items-center gap-3 text-base md:text-lg font-semibold text-gray-300 mb-3">
            <a href="<?=base_url() ?>" class="hover:text-[#d19220] transition-colors text-decoration-none text-gray-300">Home</a>
            <span>/</span>
            <a href="<?=base_url('products') ?>" class="hover:text-[#d19220] transition-colors text-decoration-none text-gray-300">Products</a>
            <span>/</span>
            <span class="text-[#d19220]">LDPE / Super LDPE Bags</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight">
            LDPE / Super LDPE Bags
        </h1>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-start">
            <div class="lg:col-span-8 space-y-12">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="w-2 h-8 bg-[#d19220] rounded-full inline-block"></span>
                        <h2 class="sp-main-title m-0">LDPE / SUPER LDPE BAGS</h2>
                    </div>
                    <p class="sp-desc-text mt-4">
                        LDPE bags are widely used in retail and industrial packing due to their affordability and popularity. These bags offer several advantages, such as providing visibility of the contents to customers and protecting against dirt, dust, and moisture, ensuring hygienic storage.
                    </p>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-3xl p-6 sm:p-8 flex items-center justify-center shadow-sm">
                    <img src="<?=base_url() ?>assets/images/products/4.png" alt="LDPE Bags" class="w-full max-h-[500px] object-contain hover:scale-105 transition-transform duration-500">
                </div>
                <div class="bg-[#0b2744] text-white p-6 sm:p-8 rounded-2xl shadow-md border-l-8 border-[#991b1b]">
                    <p class="text-xl sm:text-2xl font-semibold leading-relaxed m-0">
                        We can supply a variety of customized bags for your entire line from lightweight to high-density heavy products. Each bag is designed to meet our customer's specific requirements.
                    </p>
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-7 bg-[#d19220] rounded-full inline-block"></span>
                        <h3 class="sp-section-heading m-0">Other Uses Of LDPE BAGS</h3>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                            <div class="h-48 rounded-xl overflow-hidden mb-4 bg-white flex items-center justify-center">
                                <img src="<?=base_url() ?>assets/images/products/1.png" alt="Garment Industry" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-center font-bold text-[#0b2644] text-xl md:text-2xl m-0">Garment Industry</h4>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                            <div class="h-48 rounded-xl overflow-hidden mb-4 bg-white flex items-center justify-center">
                                <img src="<?=base_url() ?>assets/images/products/3.png" alt="Dyeing Industry" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-center font-bold text-[#0b2644] text-xl md:text-2xl m-0">Dyeing Industry</h4>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm hover:shadow-md transition">
                            <div class="h-48 rounded-xl overflow-hidden mb-4 bg-white flex items-center justify-center">
                                <img src="<?=base_url() ?>assets/images/products/4.png" alt="Industrial Roll" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-center font-bold text-[#0b2644] text-xl md:text-2xl m-0">Industrial Packing</h4>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Other Features & More Services Sidebar (Span 4) -->
            <div class="lg:col-span-4 space-y-10">
                <div class="bg-gray-50 border border-gray-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-7 bg-[#0b2744] rounded-full inline-block"></span>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-[#0b2644] m-0">Other Features</h3>
                    </div>

                    <div class="space-y-4">
    <!-- Item 1 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Flexible Strength
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <!-- Hover Description -->
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    High tensile elasticity that resists tearing, punctures, and bursting even under heavy or uneven commercial loads.
                </p>
            </div>
        </div>
    </div>

    <!-- Item 2 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Moisture Barrier Properties
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    Hydrophobic film surface protects packed garments and goods from dampness, water leaks, rain, and humidity during transit.
                </p>
            </div>
        </div>
    </div>

    <!-- Item 3 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Good Clarity
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    Semi-translucent polymer transparency enables instant barcode scanning and visual stock checks without opening the packet.
                </p>
            </div>
        </div>
    </div>

    <!-- Item 4 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Durable
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    Reinforced side-weld seals withstand long warehouse stacking cycles, rough handling, and prolonged storage friction.
                </p>
            </div>
        </div>
    </div>

    <!-- Item 5 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Recyclable
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    Code 4 (LDPE) thermoplastic material that can be re-granulated, reprocessed, and integrated into closed-loop circular systems.
                </p>
            </div>
        </div>
    </div>

    <!-- Item 6 -->
    <div class="group relative overflow-hidden rounded-xl border border-slate-200 bg-white p-5 shadow-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-[#d19220] hover:shadow-md cursor-pointer">
        <div class="flex items-center justify-between">
            <span class="text-lg md:text-xl font-bold text-[#0b2644] transition-colors duration-200 group-hover:text-[#d19220]">
                Economical to Use
            </span>
            <i class="ri-arrow-right-s-line text-2xl font-bold text-[#d19220] transition-transform duration-300 group-hover:rotate-90"></i>
        </div>
        <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-hover:grid-rows-[1fr] group-hover:mt-3">
            <div class="overflow-hidden">
                <p class="m-0 border-t border-slate-100 pt-3 text-xl md:text-xl text-slate-600 leading-relaxed font-normal">
                    Low raw-material weight and direct factory fabrication ensure cost-effective per-unit rates for high-volume retail packing.
                </p>
            </div>
        </div>
    </div>
</div>
                </div>

                <!-- More Services / Products Yellow Sidebar Card -->
                <div class="bg-[#0b2744] border border-yellow-400 rounded-3xl p-6 sm:p-8 shadow-md">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-2 h-7 bg-[#0b2644] rounded-full inline-block"></span>
                        <!-- Heading increased (text-2xl md:text-3xl) -->
                        <h3 class="text-2xl md:text-3xl font-extrabold text-[#db982a] m-0">More Services</h3>
                    </div>

                    <ul class="space-y-4 m-0 p-0 list-none">
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>POLYPROPYLENE (PP) BAGS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>ZIPPER / SLIDER BAGS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>LDPE / PP TUBE ROLLS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>BOPP BAGS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>COURIER BAGS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>PRINTED LAMINATED / MULTILAYERED BAGS</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>PVC POUCHES</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>POLYPROPYLENE (PP) BOX</span>
                            </a>
                        </li>
                        <li class="border-b border-yellow-300 pb-3">
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>GLOBAL RECYCLE STANDARD (GRS) BAGS</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-link flex items-center gap-2 text-decoration-none">
                                <span class="text-[#db982a] text-base">►</span>
                                <span>COMPOSTABLE / BIODEGRADABLE BAGS</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once 'layout/footer.php'; ?>
<?php require_once 'layout/scripts.php'; ?>

</body>
</html>