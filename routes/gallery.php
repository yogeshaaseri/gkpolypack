<!DOCTYPE html>
<html lang="en-US">
<head>
<?php require_once 'layout/head.php'; ?>
<style>
    /* Typography Overrides */
    .gallery-item {
        transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), 
                    box-shadow 0.35s cubic-bezier(0.4, 0, 0.2, 1), 
                    border-color 0.35s ease !important;
        border: 2px solid #e2e8f0 !important;
    }
    .gp-banner-tag {
        font-size: clamp(1.1rem, 2vw, 1.35rem) !important;
        font-weight: 700 !important;
        letter-spacing: 0.15em !important;
        color: #d19220 !important;
        text-transform: uppercase !important;
    }
    .gp-banner-title {
        font-size: clamp(2.3rem, 5vw, 4.2rem) !important;
        font-weight: 800 !important;
        line-height: 1.15 !important;
        color: #ffffff !important;
    }
    .gp-banner-desc {
        font-size: clamp(1.15rem, 2.2vw, 1.4rem) !important;
        line-height: 1.7 !important;
        color: #e2e8f0 !important;
    }

    /* Lightbox Modal Visibility */
    #galleryModal {
        transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
    }
    #galleryModal.hidden-modal {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }
    #galleryModal.show-modal {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    /* Next / Prev Navigation Buttons */
    .slider-nav-btn {
        width: 54px;
        height: 54px;
        border-radius: 9999px;
        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.25s ease;
    }
    .slider-nav-btn:hover {
        background-color: #d19220;
        border-color: #d19220;
        transform: scale(1.1);
    }
    @media (max-width: 640px) {
        .slider-nav-btn {
            width: 42px;
            height: 42px;
            font-size: 1.5rem;
        }
    }
</style>
</head>
<body class="gallery-page">
<?php require_once 'layout/navbar.php'; ?>
<section class="relative bg-[#0b2644] text-white pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d19220_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="container relative z-10 text-center px-4">
        <span class="gp-banner-tag sa-fade-up sa-delay-1 block mb-3">
            Visual Tour &bull; GK POLYPACK
        </span>
        <h1 class="gp-banner-title sa-fade-up sa-delay-2 mb-6 max-w-5xl mx-auto">
            Our Infrastructure &amp; Products Gallery
        </h1>
        <p class="gp-banner-desc max-w-3xl mx-auto sa-fade-up sa-delay-3 font-normal">
            Take an inside look at our state-of-the-art extrusion machinery, precision printing lines, certified quality test units, and finished packaging inventory.
        </p>
    </div>
</section>

<!-- ============================================================= GALLERY GRID (Pehle Wala UI) -->
<section class="py-20 md:py-28 bg-white">
    <div class="container">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="galleryGrid">
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/1.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/1.png" alt="BOPP Bags" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">High-Clarity</span>
                    <h3 class="text-white text-3xl font-bold mb-2">BOPP Bags</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">High-clarity, moisture-resistant packaging solution designed for superior product presentation.</p>
                </div>
            </div>

            <!-- Item 2: PVC Pouches -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/2.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/2.png" alt="PVC Pouches" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Flexible Packaging</span>
                    <h3 class="text-white text-3xl font-bold mb-2">PVC Pouches</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Durable and flexible transparent pouches ideal for cosmetics, stationery, and retail packaging.</p>
                </div>
            </div>

            <!-- Item 3: PP Bags -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/3.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/3.png" alt="PP Bags" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Industrial Bags</span>
                    <h3 class="text-white text-3xl font-bold mb-2">PP Bags</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Robust, tear-resistant bags offering optimum transparency and breathability for textile goods.</p>
                </div>
            </div>

            <!-- Item 4: LDPE Rolls -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/4.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/4.png" alt="LDPE Rolls" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Protective Films</span>
                    <h3 class="text-white text-3xl font-bold mb-2">LDPE Rolls</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Heavy-duty polythene rolls providing excellent impact resistance, waterproofing, and protection.</p>
                </div>
            </div>

            <!-- Item 5: Laminated Bags -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/5.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/5.png" alt="Laminated Bags" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Barrier Packaging</span>
                    <h3 class="text-white text-3xl font-bold mb-2">Laminated Bags</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">High-barrier packaging designed to retain freshness, aroma, and prevent external moisture.</p>
                </div>
            </div>

            <!-- Item 6: Zipper Bags -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/6.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/6.png" alt="Zipper Bags" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Reclosable Packaging</span>
                    <h3 class="text-white text-3xl font-bold mb-2">Zipper Bags</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Reclosable grip-seal pouches ensuring convenience, reusable security, and containment.</p>
                </div>
            </div>

            <!-- Item 7: Slider Bags -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/7.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/7.png" alt="Slider Bags" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Slide-Lock</span>
                    <h3 class="text-white text-3xl font-bold mb-2">Slider Bags</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Premium slide-to-lock bags for quick, hassle-free opening and closing for retail and travel.</p>
                </div>
            </div>

            <!-- Item 8: VCI Bag (Blue) -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/8.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/8.png" alt="VCI Bag (Blue)" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Anti-Corrosion</span>
                    <h3 class="text-white text-3xl font-bold mb-2">VCI Bag (Blue)</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Corrosion inhibiting bags protecting ferrous automotive and metallic parts from rust.</p>
                </div>
            </div>

            <!-- Item 9: VCI Bag (Yellow) -->
            <div class="gallery-item group relative overflow-hidden rounded-3xl bg-gray-100 border border-gray-200 shadow-sm cursor-pointer" data-img="<?=base_url() ?>assets/images/products/9.png">
                <div class="h-[360px] overflow-hidden bg-white flex items-center justify-center p-6">
                    <img src="<?=base_url() ?>assets/images/products/9.png" alt="VCI Bag (Yellow)" class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-110">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#0b2644]/95 via-[#0b2644]/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
                    <span class="text-[#d19220] text-sm font-bold uppercase tracking-widest block mb-1">Anti-Corrosion</span>
                    <h3 class="text-white text-3xl font-bold mb-2">VCI Bag (Yellow)</h3>
                    <p class="text-gray-300 text-xl m-0 line-clamp-2">Multi-metal corrosion protection film engineered for precision industrial components.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================= ONLY IMAGE SLIDER MODAL -->
<div id="galleryModal" class="fixed inset-0 z-50 bg-[#0b2644]/95 backdrop-blur-md flex items-center justify-center p-4 sm:p-10 hidden-modal" role="dialog" aria-modal="true">
    
    <!-- Close Button -->
    <button id="closeModalBtn" aria-label="Close Preview" class="absolute top-5 right-5 z-30 w-12 h-12 rounded-full bg-white/10 hover:bg-white text-white hover:text-[#0b2644] flex items-center justify-center text-2xl transition-all cursor-pointer border border-white/20">
        <i class="ri-close-line"></i>
    </button>

    <!-- Prev Button -->
    <button id="prevSlideBtn" aria-label="Previous Image" class="slider-nav-btn absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-20">
        <i class="ri-arrow-left-s-line"></i>
    </button>

    <!-- Next Button -->
    <button id="nextSlideBtn" aria-label="Next Image" class="slider-nav-btn absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-20">
        <i class="ri-arrow-right-s-line"></i>
    </button>

    <!-- Pure Image Container (No Text) -->
    <div class="relative w-full max-w-5xl h-[75vh] flex items-center justify-center p-2">
        <img id="modalImg" src="" alt="Full image preview" class="max-w-full max-h-full object-contain drop-shadow-2xl select-none transition-all duration-300">
    </div>

</div>

<?php require_once 'layout/footer.php'; ?>
<?php require_once 'layout/scripts.php'; ?>

<!-- Slider Logic (Only Image Navigation) -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const items = Array.from(document.querySelectorAll(".gallery-item"));
    const modal = document.getElementById("galleryModal");
    const modalImg = document.getElementById("modalImg");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const prevSlideBtn = document.getElementById("prevSlideBtn");
    const nextSlideBtn = document.getElementById("nextSlideBtn");

    let currentIndex = 0;

    function renderImage(index) {
        if (index < 0) index = items.length - 1;
        if (index >= items.length) index = 0;
        currentIndex = index;

        const currentItem = items[currentIndex];
        const imgSrc = currentItem.getAttribute("data-img") || currentItem.querySelector("img").src;
        
        modalImg.style.opacity = "0.4";
        setTimeout(() => {
            modalImg.src = imgSrc;
            modalImg.style.opacity = "1";
        }, 120);
    }

    function openModal(index) {
        renderImage(index);
        modal.classList.remove("hidden-modal");
        modal.classList.add("show-modal");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        modal.classList.remove("show-modal");
        modal.classList.add("hidden-modal");
        document.body.style.overflow = "";
    }

    items.forEach((item, idx) => {
        item.addEventListener("click", () => openModal(idx));
    });

    prevSlideBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        renderImage(currentIndex - 1);
    });

    nextSlideBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        renderImage(currentIndex + 1);
    });

    closeModalBtn.addEventListener("click", closeModal);
    modal.addEventListener("click", (e) => {
        if (e.target === modal || e.target.id === "modalImg") {
            if (e.target === modal) closeModal();
        }
    });
    document.addEventListener("keydown", (e) => {
        if (!modal.classList.contains("show-modal")) return;
        if (e.key === "Escape") closeModal();
        if (e.key === "ArrowLeft") renderImage(currentIndex - 1);
        if (e.key === "ArrowRight") renderImage(currentIndex + 1);
    });
});
</script>

</body>
</html>