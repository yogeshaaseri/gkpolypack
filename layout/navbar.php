<header class="container relative z-50 font-sans">
    <div class="bg-white border-b border-gray-100">
        <div class="py-6 flex justify-between items-center">
            <a href="<?=base_url() ?>" class="flex items-center shrink-0 sa-fade-left sa-delay-1">
                <img src="<?=base_url() ?>assets/images/logo.png" alt="GK POLYPACK" class="h-20 sm:h-28 lg:h-32 w-auto object-contain">
            </a>
            <div class="hidden lg:flex items-center space-x-10 xl:space-x-16">
                <div class="flex items-center space-x-4 sa-fade-up sa-delay-2">
                    <div class="text-[#d19220]">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-gray-400 uppercase tracking-wide">For Exports</span>
                        <a href="mailto:raman@gkpolypacks.com" class="text-xl font-bold text-gray-800 hover:text-[#d19220] transition">Raman@gkpolypacks.com</a>
                        <a href="tel:+919316916847" class="text-xl font-bold text-gray-800 hover:text-[#d19220] transition">+91 9316916847</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4 sa-fade-up sa-delay-3">
                    <div class="text-[#d19220]">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-gray-400 uppercase tracking-wide">For India</span>
                        <a href="mailto:raman@gkpolypacks.com" class="text-xl font-bold text-gray-800 hover:text-[#d19220] transition">Raman@gkpolypacks.com</a>
                        <a href="tel:+919592696910" class="text-xl font-bold text-gray-800 hover:text-[#d19220] transition">+91 9592696910</a>
                    </div>
                </div>
                <a href="<?=base_url('contact-us') ?>" class="bg-[#d19220] hover:bg-[#b87c1a] text-white px-10 py-4 rounded-md text-xl font-bold shadow-md transition transform hover:-translate-y-0.5 whitespace-nowrap sa-fade-right sa-delay-4">
                    Get A Quote
                </a>
            </div>

            <!-- Hamburger Button For Mobile (ID added: mobileMenuBtn) -->
            <button id="mobileMenuBtn" aria-label="Open Mobile Menu" class="lg:hidden text-gray-700 hover:text-[#d19220] p-2 rounded-lg transition-colors focus:outline-none cursor-pointer">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>

    <!-- Desktop Navigation Bar -->
    <div class="relative z-40 overlap-nav hidden lg:block sa-fade-up sa-delay-2">
        <nav class="bg-[#0b2644] rounded-lg shadow-xl flex justify-between items-center px-12 py-6">
            <ul class="flex items-center space-x-16 text-xl font-bold text-white m-0 p-0 list-none">
                <li class="list-none">
                    <a href="<?= base_url()?>" class="text-[#cc8d1d] hover:text-[#cc8d1d] py-2 transition">Home</a>
                </li>
                <li class="nav-item relative group list-none">
                    <a href="<?= base_url() ?>about-us" class="flex items-center hover:text-[#cc8d1d] py-2 transition">
                        About Us
                    </a>
                </li>
                <li class="nav-item relative group list-none">
                    <a href="<?= base_url() ?>products" class="flex items-center py-2 transition hover:text-[#cc8d1d]">
                        Products
                        <svg class="w-7 h-7 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full mt-4 w-max bg-white rounded-md shadow-2xl border border-gray-100 py-4 list-none p-0 m-0 z-50">
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Compostable Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">GRS/RCS Certified Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">LDPE Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">BOPP Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Laminated Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Zipper Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">PVC Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">PP Boxes</a></li>
                    </ul>
                </li>
                <li class="list-none">
                    <a href="<?= base_url() ?>gallery" class="hover:text-[#cc8d1d] py-2 transition">Gallery</a>
                </li>
                <li class="list-none">
                    <a href="<?= base_url() ?>contact-us" class="hover:text-[#cc8d1d] py-2 transition">Contact Us</a>
                </li>
            </ul>
            <a href="tel:+919548000500" class="bg-[#d19220] hover:bg-[#b87c1a] text-white px-10 py-4 rounded-md text-xl font-bold shadow-md transition transform hover:-translate-y-0.5 whitespace-nowrap">
                Let's Talk
            </a>
        </nav>
    </div>

    <!-- ============================================================= MOBILE OFFCANVAS DRAWER -->
    <div id="mobileDrawerBackdrop" class="fixed inset-0 bg-[#0b2644]/70 backdrop-blur-xs z-[999] opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden"></div>

    <aside id="mobileDrawer" class="fixed top-0 right-0 w-[85%] max-w-[360px] h-full bg-[#0b2644] text-white z-[1000] translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col justify-between overflow-y-auto lg:hidden">
        <div>
            <!-- Drawer Header -->
            <div class="p-6 flex justify-between items-center border-b border-white/10 bg-[#07192d]">
                <img src="<?=base_url() ?>assets/images/logo.png" alt="GK POLYPACK" class="h-14 w-auto object-contain brightness-0 invert">
                <button id="mobileMenuClose" aria-label="Close Mobile Menu" class="w-10 h-10 rounded-full bg-white/10 text-white hover:bg-[#d19220] flex items-center justify-center text-2xl transition cursor-pointer border-none">
                    &times;
                </button>
            </div>

            <!-- Drawer Links -->
            <nav class="p-6">
                <ul class="space-y-4 m-0 p-0 list-none text-lg font-semibold">
                    <li>
                        <a href="<?= base_url() ?>" class="block py-2 text-[#d19220] hover:text-[#d19220] transition">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>about-us" class="block py-2 text-white hover:text-[#d19220] transition">About Us</a>
                    </li>
                    
                    <!-- Mobile Dropdown Accordion -->
                    <li class="border-t border-b border-white/10 py-2">
                        <button id="mobileProductsToggle" class="w-full flex justify-between items-center text-left text-white hover:text-[#d19220] font-semibold py-1 bg-transparent border-none cursor-pointer">
                            <span>Products</span>
                            <svg id="productsArrow" class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <ul id="mobileProductsSubmenu" class="hidden pl-4 pt-2 space-y-2.5 text-base text-gray-300 list-none m-0">
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; Compostable Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; GRS/RCS Certified Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; LDPE Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; BOPP Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; Laminated Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; Zipper Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; PVC Bags</a></li>
                            <li><a href="#" class="block py-1 hover:text-[#d19220] transition">&bull; PP Boxes</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?= base_url() ?>gallery" class="block py-2 text-white hover:text-[#d19220] transition">Gallery</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>contact-us" class="block py-2 text-white hover:text-[#d19220] transition">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Drawer Footer: Quick Contact & Call Button -->
        <div class="p-6 border-t border-white/10 bg-[#07192d] space-y-4">
            <div class="text-sm text-gray-300 space-y-1.5">
                <span class="text-[#d19220] font-bold text-xs uppercase tracking-wider block">Call Direct:</span>
                <a href="tel:+919592696910" class="block text-white font-bold hover:text-[#d19220] transition">+91 95926 96910 (India)</a>
                <a href="tel:+919316916847" class="block text-white font-bold hover:text-[#d19220] transition">+91 93169 16847 (Exports)</a>
            </div>
            <a href="tel:+919548000500" class="block text-center bg-[#d19220] hover:bg-[#b87c1a] text-white py-3.5 rounded-lg text-lg font-bold shadow-md transition">
                Let's Talk
            </a>
        </div>
    </aside>
</header>

<!-- Mobile Navigation Toggle Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenuClose = document.getElementById('mobileMenuClose');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileDrawerBackdrop = document.getElementById('mobileDrawerBackdrop');

    const mobileProductsToggle = document.getElementById('mobileProductsToggle');
    const mobileProductsSubmenu = document.getElementById('mobileProductsSubmenu');
    const productsArrow = document.getElementById('productsArrow');

    function openMobileMenu() {
        mobileDrawer.classList.remove('translate-x-full');
        mobileDrawerBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileDrawer.classList.add('translate-x-full');
        mobileDrawerBackdrop.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
    if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
    if (mobileDrawerBackdrop) mobileDrawerBackdrop.addEventListener('click', closeMobileMenu);

    // Accordion Toggle for Products Submenu on Mobile
    if (mobileProductsToggle) {
        mobileProductsToggle.addEventListener('click', function(e) {
            e.preventDefault();
            mobileProductsSubmenu.classList.toggle('hidden');
            productsArrow.classList.toggle('rotate-180');
        });
    }
});
</script>