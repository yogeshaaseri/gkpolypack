<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Premium Polybag Solutions | GK POLYPACK</title>
    <meta name="description" content="GK POLYPACK is a leading manufacturer of polybags since 2007. We offer Compostable, GRS/RCS, BOPP, Zipper, LDPE and Laminated bags for all industries. ISO 9001:2015 Certified.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: { preflight: false },
            theme: {
                extend: {
                    fontFamily: { sans: ['Montserrat','Arial','sans-serif'] }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/home.css">
    <script src="<?=base_url() ?>assets/js/jquery.js"></script>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }
    .hero__video {
        width: 600px;
        height: 600px;
    }
    .differentiators {
        /* margin-bottom: 40px !important; */
    }
    .dropdown-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease-in-out;
    }
    .nav-item:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .overlap-nav {
        margin-bottom: -1.5rem;
    }
    .stats-banner {
        background: linear-gradient(135deg, #162140 0%, #243a6e 60%, #162140 100%);
        padding: 5rem 0;
        margin-top: 5rem;
        margin-bottom: 5rem;
        position: relative;
        overflow: hidden;
    }
    .stats-banner__inner {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        gap: 2.4rem;
    }
    .stats-banner__item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 1.2rem 2rem;
        flex: 1 1 130px;
        border-right: 1px solid rgba(255,255,255,0.1);
    }
    .stats-banner__item:last-child {
        border-right: none;
    }
    .stats-banner__number {
        font-size: 3.8rem;
        font-weight: 700;
        color: #c49428;
        line-height: 1;
        margin-bottom: 0.7rem;
        letter-spacing: -0.02em;
    }
    .stats-banner__number sup {
        font-size: 2.2rem;
        vertical-align: super;
        line-height: 0;
    }
    .stats-banner__label {
        font-size: 1.2rem;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.75);
        text-transform: uppercase;
        letter-spacing: 0.1em;
        line-height: 1.4;
    }
    .stats-banner__icon {
        width: 3.2rem;
        height: 3.2rem;
        margin-bottom: 0.8rem;
        fill: rgba(196, 148, 40, 0.6);
    }
    @media (max-width: 600px) {
        .stats-banner__item {
            border-right: none;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding: 1.6rem 1rem;
            flex: 1 1 45%;
        }
        .stats-banner__item:nth-child(3),
        .stats-banner__item:last-child {
            border-bottom: none;
        }
    }
    @media (min-width: 1200px) {
        .differentiators {
            margin-top: 1rem;
            margin-bottom: 10rem !important;
        }
    }
    @media (max-width: 767px) {
        .site-header__logo img {
            width: 70px !important;
            height: auto;
        }
        .hero__video {
            width: 450px;
            height: 450px;
        }
    }
    .site-header {
        position: sticky;
        top: 0;
        z-index: 999;
        background-color: #ffffff;
        transition: box-shadow 0.3s ease-in-out;
    }
    .site-header.scrolled {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
    }
    .sa-fade-up, .sa-fade-left, .sa-fade-right, .sa-zoom-in {
        opacity: 0;
        transition: opacity 1.1s cubic-bezier(0.22, 1, 0.36, 1), 
                    transform 1.1s cubic-bezier(0.22, 1, 0.36, 1);
        will-change: opacity, transform;
        backface-visibility: hidden;
    }
    .sa-fade-up    { transform: translateY(35px); }
    .sa-fade-left  { transform: translateX(-40px); }
    .sa-fade-right { transform: translateX(40px); }
    .sa-zoom-in    { transform: scale(0.95); }
    .sa-fade-up.sa-active,
    .sa-fade-left.sa-active,
    .sa-fade-right.sa-active {
        opacity: 1;
        transform: translate(0, 0);
    }
    .sa-zoom-in.sa-active {
        opacity: 1;
        transform: scale(1);
    }
    .sa-delay-1 { transition-delay: 0.12s; }
    .sa-delay-2 { transition-delay: 0.24s; }
    .sa-delay-3 { transition-delay: 0.36s; }
    .sa-delay-4 { transition-delay: 0.48s; }
    .sa-delay-5 { transition-delay: 0.60s; }
    .sa-delay-6  { transition-delay: 0.72s; }
    .sa-delay-7  { transition-delay: 0.84s; }
    .sa-delay-8  { transition-delay: 0.96s; }
    .sa-delay-9  { transition-delay: 1.08s; }
    .sa-delay-10 { transition-delay: 1.20s; }
</style>
<body class="home page-template-default page page-id-2">

<header class="container relative z-50 font-sans">
    <div class="bg-white border-b border-gray-100">
        <div class="py-6 flex justify-between items-center">
            <a href="<?=base_url() ?>" class="flex items-center shrink-0 sa-fade-left sa-delay-1">
                <img src="<?=base_url() ?>assets/images/logo.png" alt="GK POLYPACK" class="h-28 lg:h-32 w-auto object-contain">
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
                <a href="#" class="bg-[#d19220] hover:bg-[#b87c1a] text-white px-10 py-4 rounded-md text-xl font-bold shadow-md transition transform hover:-translate-y-0.5 whitespace-nowrap sa-fade-right sa-delay-4">
                    Get A Quote
                </a>
            </div>
            <button class="lg:hidden text-gray-600 hover:text-[#ff4b3a] sa-fade-right sa-delay-1">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
    </div>
    <div class="relative z-40 overlap-nav hidden lg:block sa-fade-up sa-delay-2">
        <nav class="bg-[#0b2644] rounded-lg shadow-xl flex justify-between items-center px-12 py-6">
            <ul class="flex items-center space-x-16 text-xl font-bold text-white m-0 p-0 list-none">
                <li class="nav-item relative group list-none">
                    <a href="#" class="flex items-center text-[#cc8d1d] py-2 transition">
                        Products
                        <svg class="w-7 h-7 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full mt-4 w-max bg-white rounded-md shadow-2xl border border-gray-100 py-4 list-none p-0 m-0 z-50">
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Compostable Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">GRS/RCS Certified Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">LDPE Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">BOPP Bags</a></li>
                    </ul>
                </li>

                <li class="nav-item relative group list-none">
                    <a href="#" class="flex items-center hover:text-[#cc8d1d] py-2 transition">
                        More Products
                        <svg class="w-7 h-7 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full mt-4 w-max bg-white rounded-md shadow-2xl border border-gray-100 py-4 list-none p-0 m-0 z-50">
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Laminated Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Zipper Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">PVC Bags</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">PP Boxes</a></li>
                    </ul>
                </li>

                <li class="nav-item relative group list-none">
                    <a href="#" class="flex items-center hover:text-[#cc8d1d] py-2 transition">
                        Industries
                        <svg class="w-7 h-7 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full mt-4 w-max bg-white rounded-md shadow-2xl border border-gray-100 py-4 list-none p-0 m-0 z-50">
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Garment</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Food</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Medical</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Cosmetics</a></li>
                    </ul>
                </li>

                <li class="nav-item relative group list-none">
                    <a href="#" class="flex items-center hover:text-[#cc8d1d] py-2 transition">
                        About Us
                        <svg class="w-7 h-7 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                    <ul class="dropdown-menu absolute left-0 top-full mt-4 w-max bg-white rounded-md shadow-2xl border border-gray-100 py-4 list-none p-0 m-0 z-50">
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Our Story</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Certifications</a></li>
                        <li class="list-none"><a href="#" class="block px-8 py-4 text-xl font-bold text-gray-700 hover:bg-gray-50 hover:text-[#cc8d1d] transition">Our Clients</a></li>
                    </ul>
                </li>

                <li class="list-none">
                    <a href="#" class="hover:text-[#cc8d1d] py-2 transition">Contact</a>
                </li>
            </ul>
            <a href="tel:+919548000500" class="bg-[#d19220] hover:bg-[#b87c1a] text-white px-10 py-4 rounded-md text-xl font-bold shadow-md transition transform hover:-translate-y-0.5 whitespace-nowrap">
                Let's Talk
            </a>
        </nav>
    </div>
</header>

<!-- ============================================================= HERO -->
<div class="hero">
    <div class="container">
        <video class="hero__video " autoplay muted loop playsinline>
            <source src="<?=base_url() ?>assets/videos/3.mp4" type="video/mp4">
        </video>
        <div class="hero__inner">
            <div class="hero__content">
                <h1 class="hero__title sa-fade-left sa-delay-1">Complete Packaging Solutions Designed to Meet Every Business Need</h1>
                <p class="hero__subtitle sa-fade-left sa-delay-2">Strong. Reliable. Sustainable.<br>Explore Solutions</p>
                <a class="btn btn--secondary btn--wide btn--arrow btn--hover-split sa-fade-left sa-delay-4" href="#">
                    <span class="btn__text">
                        Our Products
                        <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================= MARKET DIFFERENTIATORS -->
<div class="container">
    <div class="differentiators" id="anchor">
        <h2 class="common-title text-center-s sa-fade-up sa-delay-1">Why Choose GK POLYPACK</h2>
        <div class="swiper differentiators__slider">
            <div class="differentiators__list swiper-wrapper">

                <div class="differentiators__card swiper-slide sa-fade-up sa-delay-3" style="--overlay-color:">
                    <span class="differentiators__progress"></span>
                    <img class="differentiators__card-bg" src="<?=base_url() ?>assets/images/11.jpg" alt="">
                    <div class="differentiators__card-overlay"></div>
                    <div class="differentiators__card-inner">
                        <h3 class="differentiators__card-title">Extensive Polybag Portfolio</h3>
                        <p class="differentiators__card-desc">From Compostable Bags to BOPP, Zipper, Laminated, PVC, PP Boxes and LD/PP Rolls — GK POLYPACK has manufactured every type of polybag since 2007.</p>
                        <a class="differentiators__link btn btn--light btn--arrow" href="#">
                            <span class="btn__text">
                                Our Products
                                <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg"><path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="differentiators__card swiper-slide sa-fade-up sa-delay-5" style="--overlay-color: ">
                    <span class="differentiators__progress"></span>
                    <img class="differentiators__card-bg" src="<?=base_url() ?>assets/images/12.jpg" alt="">
                    <div class="differentiators__card-overlay"></div>
                    <div class="differentiators__card-inner">
                        <h3 class="differentiators__card-title">ISO 9001:2015 Certified Quality</h3>
                        <p class="differentiators__card-desc">Committed to delivering high quality packaging. ISO 9001:2015 certified, CPCB approved and Intertek GRS/RCS certified. The secret lies in our raw materials and technology.</p>
                        <a class="differentiators__link btn btn--light btn--arrow" href="#">
                            <span class="btn__text">
                                Our Certifications
                                <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg"><path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="differentiators__card swiper-slide sa-fade-up sa-delay-7" style="--overlay-color:">
                    <span class="differentiators__progress"></span>
                    <img class="differentiators__card-bg" src="<?=base_url() ?>assets/images/13.jpg" alt="">
                    <div class="differentiators__card-overlay"></div>
                    <div class="differentiators__card-inner">
                        <h3 class="differentiators__card-title">Innovation &amp; Customization</h3>
                        <p class="differentiators__card-desc">We offer tailored packaging solutions aligned with your brand image and product specifications. Custom sizes, prints and materials available for all bag types.</p>
                        <a class="differentiators__link btn btn--light btn--arrow" href="#">
                            <span class="btn__text">
                                Contact Us
                                <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg"><path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="differentiators__card swiper-slide sa-fade-up sa-delay-9" style="--overlay-color: ">
                    <span class="differentiators__progress"></span>
                    <img class="differentiators__card-bg" src="<?=base_url() ?>assets/images/14.jpg" alt="">
                    <div class="differentiators__card-overlay"></div>
                    <div class="differentiators__card-inner">
                        <h3 class="differentiators__card-title">Trusted by Leading Brands</h3>
                        <p class="differentiators__card-desc">GK POLYPACK is trusted by Reliance Trends, Wildcraft, TATA, GUESS, Westside, Flipkart, D-Mart, Myntra, Monte Carlo, Being Human, Indian Terrain and many more renowned brands.</p>
                        <a class="differentiators__link btn btn--light btn--arrow" href="#">
                            <span class="btn__text">
                                Our Clients
                                <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg"><path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/></svg>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ============================================================= NEWS & MEDIA -->
<div class="news-section container pad-v--m">
    <div class="news-section__header text-center-s">
        <h2 class="news-section__title common-title sa-fade-up sa-delay-1">Our Products</h2>
    </div>
    <div class="swiper news-section__slider">
        <div class="news-section__grid swiper-wrapper">
            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-1" style="background-image:url('<?=base_url() ?>assets/images/products/1.webp')">
                <span class="news-section__card-title">BOPP</span>
            </a>

            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-2" style="background-image:url('<?=base_url() ?>assets/images/products/1.png')">
                <span class="news-section__card-title">PVC Pouches</span>
            </a>

            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-3" style="background-image:url('<?=base_url() ?>assets/images/products/3.webp')">
                <span class="news-section__card-title">POLYPROPYLENE (PP) BAGS</span>
            </a>

            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-4" style="background-image:url('<?=base_url() ?>assets/images/products/4.webp')">
                <span class="news-section__card-title">LDPE Rolls</span>
            </a>

            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-5" style="background-image:url('<?=base_url() ?>assets/images/4.jpg')">
                <span class="news-section__card-title">Laminated / Multilayered Bags</span>
            </a>

            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-6" style="background-image:url('<?=base_url() ?>assets/images/products/5.webp')">
                <span class="news-section__card-title">Zipper Bags</span>
            </a>
            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-7" style="background-image:url('<?=base_url() ?>assets/images/products/7.webp')">
                <span class="news-section__card-title">Slider Bags</span>
            </a>
            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-8" style="background-image:url('<?=base_url() ?>assets/images/products/2.png')">
                <span class="news-section__card-title">VCI Bag (BLue)</span>
            </a>
            <a href="#" class="news-section__card swiper-slide sa-fade-up sa-delay-9" style="background-image:url('<?=base_url() ?>assets/images/products/3.png')">
                <span class="news-section__card-title">VCI Bag (Yellow)</span>
            </a>
        </div>
    </div>
</div>

<!-- ============================================================= INFO CIRCLE -->
<div class="value-chain">
    <div class="container">
        <div class="value-chain__inner">

            <!-- Left col: circle diagram -->
            <div class="value-chain__col sa-fade-left sa-delay-2">
                <h3 class="value-chain__heading">Meet Your Packaging Requirements</h3>
                <p class="value-chain__subheading"></p>

                <div class="value-chain__diagram sa-zoom-in sa-delay-3">
                    <ul class="value-chain__nav-list value-chain__nav-list--left">
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__nav-label">Recycling</span>
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19.5611 12.0985L21.0926 14.7501C22.0591 16.4241 21.4855 18.5647 19.8115 19.5312C19.2794 19.8384 18.6759 20.0001 18.0615 20.0001L15.9993 19.9995V22.0001L10.9993 18.5001L15.9993 15.0001V16.9995L18.0615 17.0001C18.1493 17.0001 18.2355 16.977 18.3115 16.9331C18.5241 16.8104 18.6124 16.5551 18.5325 16.332L18.4945 16.2501L16.9631 13.5985L19.5611 12.0985ZM7.73617 9.38407L8.26726 15.4642L6.53571 14.4645L5.50412 16.2501C5.46023 16.3261 5.43713 16.4123 5.43713 16.5001C5.43713 16.7456 5.614 16.9497 5.84725 16.992L5.93713 17.0001L8.99919 16.9997V19.9996L5.93713 20.0001C4.00413 20.0001 2.43713 18.4331 2.43713 16.5001C2.43713 15.8857 2.59885 15.2822 2.90604 14.7501L3.93763 12.9645L2.20508 11.9642L7.73617 9.38407ZM13.7493 2.96901C14.2814 3.2762 14.7232 3.71803 15.0304 4.2501L16.061 6.03629L17.7935 5.03599L17.2624 11.1161L11.7314 8.53599L13.4629 7.53629L12.4323 5.7501C12.3884 5.67409 12.3253 5.61097 12.2493 5.56708C12.0367 5.44435 11.7715 5.49546 11.6182 5.67629L11.5663 5.7501L10.0356 8.40209L7.4376 6.90216L8.96822 4.2501C9.93472 2.57607 12.0753 2.00251 13.7493 2.96901Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK manufactures eco-friendly Compostable Bags and GRS/RCS Certified Bags that support a circular economy and sustainable packaging practices.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__nav-label">Consumption</span>
                            <span class="value-chain__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9ZM9 12V18H11V12H9ZM13 12V18H15V12H13Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK compostable and LDPE bags are ideal for retail, garment, food and everyday use — durable, convenient and eco-conscious for modern consumers.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__nav-label">Retail</span>
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0049 0.999695C14.7663 0.999695 17.0049 3.23827 17.0049 5.99969V7.99969H20.0049C20.5572 7.99969 21.0049 8.44741 21.0049 8.99969V20.9997C21.0049 21.552 20.5572 21.9997 20.0049 21.9997H4.00488C3.4526 21.9997 3.00488 21.552 3.00488 20.9997V8.99969C3.00488 8.44741 3.4526 7.99969 4.00488 7.99969H7.00488V5.99969C7.00488 3.23827 9.24346 0.999695 12.0049 0.999695ZM17.0049 10.9997H15.0049V11.9997C15.0049 12.552 15.4526 12.9997 16.0049 12.9997C16.5177 12.9997 16.9404 12.6137 16.9982 12.1163L17.0049 11.9997V10.9997ZM9.00488 10.9997H7.00488V11.9997C7.00488 12.552 7.4526 12.9997 8.00488 12.9997C8.51772 12.9997 8.94039 12.6137 8.99815 12.1163L9.00488 11.9997V10.9997ZM12.0049 2.99969C10.4072 2.99969 9.10122 4.24861 9.00898 5.82342L9.00488 5.99969V7.99969H15.0049V5.99969C15.0049 4.40201 13.756 3.09603 12.1812 3.00479L12.0049 2.99969Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's BOPP and Laminated bags are available in various formats — high clarity, matte and printed finishes — perfect for attractive retail shelf display.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__nav-label">Distribution</span>
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 10V14H10V10H14ZM16 10H21V14H16V10ZM14 21H10V16H14V21ZM16 21V16H21V20C21 20.5523 20.5523 21 20 21H16ZM14 3V8H10V3H14ZM16 3H20C20.5523 3 21 3.44772 21 4V8H16V3ZM8 10V14H3V10H8ZM8 21H4C3.44772 21 3 20.5523 3 20V16H8V21ZM8 3V8H3V4C3 3.44772 3.44772 3 4 3H8Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's Zipper and LDPE bags ensure flawless bag integrity from manufacturer to retailer — durable, high-quality seals for safe product distribution.</span>
                        </li>
                    </ul>
                    <div class="value-chain__center"></div>

                    <ul class="value-chain__nav-list value-chain__nav-list--right">
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M15.9498 2.39018L21.6066 8.04704C21.9972 8.43756 21.9972 9.07073 21.6066 9.46125L13.8285 17.2394L11.7071 17.9465L10.2929 19.3607C9.90241 19.7513 9.26925 19.7513 8.87872 19.3607L4.63608 15.1181C4.24556 14.7276 4.24556 14.0944 4.63608 13.7039L6.0503 12.2897L6.7574 10.1684L14.5356 2.39018C14.9261 1.99966 15.5593 1.99966 15.9498 2.39018ZM16.6569 5.92572L10.2929 12.2897L11.7071 13.7039L18.0711 7.33993L16.6569 5.92572ZM4.28253 16.8859L7.11096 19.7143L5.69674 21.1285L1.4541 19.7143L4.28253 16.8859Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-label">Design</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK offers custom design and printing on all bag types, aligning packaging with your brand image and product specifications for maximum shelf impact.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 5H20V3H4V5ZM20 9H4V7H20V9ZM9 13H15V11H21V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V11H9V13Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-label">Production</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK produces BOPP, LDPE, Compostable, Zipper, Laminated, PVC, PP Boxes and LD/PP Rolls using ISO certified processes and hi-tech factory machinery.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0049 22.0027C6.48204 22.0027 2.00488 17.5256 2.00488 12.0027C2.00488 6.4799 6.48204 2.00275 12.0049 2.00275C17.5277 2.00275 22.0049 6.4799 22.0049 12.0027C22.0049 17.5256 17.5277 22.0027 12.0049 22.0027ZM12.0049 20.0027C16.4232 20.0027 20.0049 16.421 20.0049 12.0027C20.0049 7.58447 16.4232 4.00275 12.0049 4.00275C7.5866 4.00275 4.00488 7.58447 4.00488 12.0027C4.00488 16.421 7.5866 20.0027 12.0049 20.0027ZM7.00488 13.0027H16.0049V15.0027H12.0049V18.0027L7.00488 13.0027ZM12.0049 9.00275V6.00275L17.0049 11.0027H8.00488V9.00275H12.0049Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-label">Conversion</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's state-of-the-art factory processes include printing, laminating and sealing — creating premium quality packaging that protects and presents your product.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4.5 7.65311V16.3469L12 20.689L19.5 16.3469V7.65311L12 3.311L4.5 7.65311ZM12 1L21.5 6.5V17.5L12 23L2.5 17.5V6.5L12 1ZM6.49896 9.97065L11 12.5765V17.625H13V12.5765L17.501 9.97066L16.499 8.2398L12 10.8445L7.50104 8.2398L6.49896 9.97065Z"></path></svg>
                            </span>
                            <span class="value-chain__nav-label">Packing</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's high-efficiency polybags are designed for seamless packing and filling, ensuring your product's safety and presentation from factory to retail shelf.</span>
                        </li>
                    </ul>

                    <ul class="value-chain__nav-list value-chain__nav-list--mobile">
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon"><svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M15.010482,0 L8.97546755,0.03401695 C9.59639239,0.15296875 10.0471381,0.959635417 10.0471381,0.959635417 L12.5748656,5.48567708 L10.8725913,6.45963542 L16.7286983,7.32617233 L18.8932972,1.87988277 L17.313246,2.78043618 L16.1707211,0.735839867 C15.9448943,0.332506533 15.5664331,0.0256666667 15.010482,0 Z M5.74096898,6.703125 L0,7.58756533 L1.57119395,8.504232 L0.409183559,10.5380862 C0.371985078,11.9238277 3.46831755,17.1588542 3.7127649,15.7552083 L6.28300436,11.254232 L7.97819282,12.2425133 L5.74096898,6.703125 Z M14.7447782,12.6901042 L11.1170384,17.4166667 L14.7447782,22 L17.0687989,20.1666667 L18.2733219,19.5078125 L21.2120033,14.1796875 L19.8870285,14.6666667 L14.7447782,14.6666667 L14.7447782,12.6901042 Z M6.44242647,14.6666667 L5.19893369,16.8204749 C5.25449761,19.9096416 7.53181123,20.1433916 9.30316853,20.1487632 L9.30316853,14.6666667 L6.44242647,14.6666667 Z" fill-rule="nonzero"/></svg></span>
                            <span class="value-chain__nav-label">Recycling</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK manufactures eco-friendly Compostable Bags and GRS/RCS Certified Bags that support a circular economy and sustainable packaging practices.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon"><svg width="13" height="22" viewBox="0 0 13 22" xmlns="http://www.w3.org/2000/svg"><path d="M5.57142857,0 C4.55,0 3.71428571,0.825 3.71428571,1.83333333 L3.71428571,2.75 L9.28571429,2.75 L9.28571429,1.83333333 C9.28571429,0.825 8.45,0 7.42857143,0 L5.57142857,0 Z M3.5546875,4.58333333 L0,8.09244792 L0,20.1666667 C0,21.1795833 0.831071429,22 1.85714286,22 L11.1428571,22 C12.1689286,22 13,21.1795833 13,20.1666667 L13,8.09244792 L9.4453125,4.58333333 L3.5546875,4.58333333 Z" fill-rule="nonzero"/></svg></span>
                            <span class="value-chain__nav-label">Consumption</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK compostable and LDPE bags are ideal for retail, garment, food and everyday use — durable, convenient and eco-conscious for modern consumers.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon"><svg width="22" height="20" viewBox="0 0 22 20" xmlns="http://www.w3.org/2000/svg"><path d="M11,0 C10.2164038,0 4.7265625,5.83333333 L4.7265625,5.83333333 L7.11959092,5.83333333 L11,2.01171875 L14.8804091,5.83333333 L17.2734371,5.83333333 L11,0 Z M0,7.5 L0,10 L2.30213339,18.6067708 C2.43836416,19.4101042 3.1446118,20 3.97130411,20 L18.0270437,20 C18.8545822,20 19.5599834,19.4101042 19.6962142,18.6067708 L22,10 L22,7.5 L0,7.5 Z" fill-rule="nonzero"/></svg></span>
                            <span class="value-chain__nav-label">Retail</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's BOPP and Laminated bags are available in various formats — high clarity, matte and printed finishes — perfect for attractive retail shelf display.</span>
                        </li>
                        <li class="value-chain__nav-item" tabindex="0">
                            <span class="value-chain__icon"><svg width="20" height="22" viewBox="0 0 20 22" xmlns="http://www.w3.org/2000/svg"><path d="M13.5128896,0 L6.51019623,0 C5.40977299,0 5.40977299,1.1475527 5.40977299,1.1475527 L5.40977299,7.93068953 C5.40977299,9.19614148 6.39476722,10.217935 7.63370527,10.217935 L12.1354367,10.217935 C13.5128896,10.217935 14.6133128,9.26688103 14.6133128,7.85209003 L14.6133128,0 L13.5128896,0 Z M0,12.9846374 L0,19.7284745 C0,20.9860665 0.992689496,22 2.23162755,22 L17.5221239,22 C18.8995768,22 20,21.056806 20,19.649875 L20,12.9846374 C20,11.8449446 0,11.8449446 0,12.9846374 Z" fill-rule="nonzero"/></svg></span>
                            <span class="value-chain__nav-label">Distribution</span>
                            <span class="value-chain__nav-info sr-only">GK POLYPACK's Zipper and LDPE bags ensure flawless bag integrity from manufacturer to retailer — durable, high-quality seals for safe product distribution.</span>
                        </li>
                    </ul>
                </div>

                <h3 class="value-chain__heading">Step Up Your Packaging Game</h3>
                <p class="value-chain__subheading"></p>
            </div>

            <div class="value-chain__col sa-fade-right sa-delay-2">
                <div class="value-chain__content">
                    <h2 class="section-title common-title sa-fade-up sa-delay-3">One Vision, Infinite Packaging Solutions</h2>
                    <p class="sa-fade-up sa-delay-4">GK POLYPACK is a leading manufacturer of polybags established in 2010. From humble beginnings with a single bag-making machine to today's hi-tech factory, we provide BOPP Bags, LDPE Bags, Compostable Bags, Zipper Bags, Laminated Bags, PVC Bags, PP Boxes and LD/PP Rolls. ISO 9001:2015 certified and CPCB approved.</p>
                    <a class="btn btn--secondary btn--wide btn--arrow btn--hover-split sa-fade-up sa-delay-5" href="#">
                        <span class="btn__text">
                            Our Story
                            <svg width="28" height="13" viewBox="0 0 28 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28 6.5 22.011.185a.574.574 0 0 0-.56-.168.587.587 0 0 0-.422.41.585.585 0 0 0 .144.575l4.65 4.907H.592a.585.585 0 0 0-.512.293.603.603 0 0 0 0 .596.585.585 0 0 0 .512.293h25.233l-4.651 4.907a.585.585 0 0 0-.144.574c.057.203.22.36.422.411a.574.574 0 0 0 .56-.168L28 6.5z" fill-rule="nonzero"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

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

            <div class="stats-banner__item sa-fade-up sa-delay-3">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                </svg>
                <span class="stats-banner__number" data-counter data-target="250" data-start="0" data-duration="1400" data-suffix="+">0</span>
                <span class="stats-banner__label">Renowned Clients</span>
            </div>

            <div class="stats-banner__item sa-fade-up sa-delay-5">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 6h-2.18c.07-.44.18-.86.18-1.3C18 2.12 15.88 0 13.3 0c-1.3 0-2.4.5-3.2 1.4L12 4.38 13.9 2.5c.4-.4.9-.5 1.4-.5 1.28 0 2.3 1.02 2.3 2.3 0 .82-.5 1.52-1.1 2.06L13 8.8V10h7v8h-2v2h4V8c0-1.1-.9-2-2-2zM2 6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2H2zm7 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H3l3-4 2 3 3-4 4 5z"/>
                </svg>
                <span class="stats-banner__number" data-counter data-target="15" data-start="0" data-duration="1200" data-suffix="+">0</span>
                <span class="stats-banner__label">Product Categories</span>
            </div>

            <div class="stats-banner__item sa-fade-up sa-delay-7">
                <svg class="stats-banner__icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
                </svg>
                <span class="stats-banner__number stats-banner__number--text">ISO</span>
                <span class="stats-banner__label">9001:2015 Certified</span>
            </div>

        </div>
    </div>
</div>

<!-- ============================================================= FOOTER -->
<!-- Remix Icon CDN -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

<style>
    /* Teeno columns ke beech barabar space maintain karne ke liye */
    .site-footer__inner.footer-grid-layout {
        display: grid;
        grid-template-columns: 1.4fr 1.6fr 1fr;
        gap: 3.5rem; /* Teeno columns ke beech barabar gap */
        align-items: start;
    }

    @media (max-width: 991px) {
        .site-footer__inner.footer-grid-layout {
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
        }
    }

    @media (max-width: 640px) {
        .site-footer__inner.footer-grid-layout {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
    }

    .footer-social-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 6px;
        background-color: #132849;
        color: #ffffff !important;
        text-decoration: none;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    .footer-social-btn:hover {
        background-color: #d69426;
        transform: translateY(-2px);
    }
</style>

<div class="site-footer-wrapper">
    <footer class="site-footer container">
        <div class="site-footer__inner footer-grid-layout bb pad-v--m">
            <div class="site-footer__brand sa-fade-up sa-delay-1" style="max-width: 100%;">
                <a class="site-footer__logo" href="<?=base_url() ?>">
                    <img src="<?=base_url() ?>assets/images/logo.png" alt="GK POLYPACK" style="width: 70%; height: auto;">
                </a>
                
                <p style="color: #142849; font-size: 14px; line-height: 1.6; margin-top: 1.2rem; margin-bottom: 0;">
                    <strong style="color: #d69426;">Gopal Krishan Enterprises</strong>, established in 2010, is a trusted manufacturing group behind <strong style="color: #d69426;">GK POLYPACK</strong>, a dedicated polybag manufacturing unit specializing in high-quality Compostable, BOPP, and flexible packaging solutions. With a strong focus on quality and sustainability, GK POLYPACK delivers reliable packaging solutions for diverse industries.
                </p>
            </div>

            <!-- Column 2: Nav (Products & Connect Side-by-Side) -->
            <div class="site-footer__nav sa-fade-up sa-delay-3" style="width: 100%;">
                <ul id="menu-footer" class="menu" style="display: flex; gap: 2.5rem; justify-content: space-between; margin: 0; padding: 0; list-style: none;">

                    <!-- Products -->
                    <li class="menu-item menu-item-has-children" style="flex: 1;">
                        <a href="#" data-title="Products" style="font-size: 14px; font-weight: 700; color: #142849; text-transform: uppercase;">Products</a>
                        <ul class="sub-menu" style="margin-top: 1rem; padding: 0; list-style: none;">
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="Compostable Bags" style="font-size: 14px; color: #142849; text-decoration: none;">Compostable Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="GRS/RCS Bags" style="font-size: 14px; color: #142849; text-decoration: none;">GRS/RCS Certified Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="LDPE Bags" style="font-size: 14px; color: #142849; text-decoration: none;">LDPE Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="BOPP Bags" style="font-size: 14px; color: #142849; text-decoration: none;">BOPP Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="Laminated Bags" style="font-size: 14px; color: #142849; text-decoration: none;">Laminated Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="Zipper Bags" style="font-size: 14px; color: #142849; text-decoration: none;">Zipper Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0.5rem;"><a href="#" data-title="PVC Bags" style="font-size: 14px; color: #142849; text-decoration: none;">PVC Bags</a></li>
                            <li class="menu-item" style="margin-bottom: 0;"><a href="#" data-title="PP Boxes" style="font-size: 14px; color: #142849; text-decoration: none;">PP Boxes</a></li>
                        </ul>
                    </li>

                    <!-- Connect -->
                    <li class="menu-item menu-item-has-children" style="flex: 1;">
                        <a href="#" data-title="Connect" style="font-size: 14px; font-weight: 700; color: #142849; text-transform: uppercase;">Contact Info</a>
                        <div class="site-footer__company-info" style="margin-top: 1rem; color: #142849; font-size: 14px; line-height: 1.6;">
                            <p style="margin: 0 0 0.6rem 0;">
                                <strong style="color: #d69426;">Address:</strong><br> Plot No. 123, Industrial Area, Phase-I, New Delhi, India
                            </p>
                            <p style="margin: 0 0 0.6rem 0;">
                                <strong style="color: #d69426;">Phone:</strong><br>
                                <a href="tel:+919876543210" style="color: #142849; font-size: 14px; text-decoration: none;">+91 98765 43210</a>
                            </p>
                            <p style="margin: 0;">
                                <strong style="color: #d69426;">Email:</strong><br>
                                <a href="mailto:info@gkpolypack.com" style="color: #142849; font-size: 14px; text-decoration: none;">info@gkpolypack.com</a>
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Column 3: Newsletter CTA & Outside Socials -->
            <div class="sa-fade-up sa-delay-5" style="display: flex; flex-direction: column; align-items: flex-start; width: 100%;">
                
                <!-- Yellow Box CTA -->
                <div class="newsletter-cta" style="margin-bottom: 0; width: 100%;">
                    <p class="newsletter-cta__title" style="font-size: 14px; font-weight: 700; color: #142849;">Keep Informed</p>
                    <button class="btn btn--primary btn--hover-glow open-modal js-open-newsletter" style="width: 100%;">
                        <span class="btn__text" style="font-size: 14px;">GK POLYPACK Newsletter</span>
                    </button>
                </div>

                <!-- Social Icons (Yellow Box Ke Bahar) -->
                <div class="footer-social-links" style="margin-top: 1.5rem; width: 100%;">
                    <p style="color: #142849; font-size: 14px; font-weight: 700; margin: 0 0 0.6rem 0; text-transform: uppercase; letter-spacing: 0.5px;">Follow Us</p>
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <!-- Instagram -->
                        <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" class="footer-social-btn">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook" class="footer-social-btn">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="footer-social-btn">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <div class="legal-bar sa-fade-up sa-delay-2" style="font-size: 14px;">
            <p class="copyrights" style="font-size: 14px;">© GK POLYPACK. 2026. All Rights Reserved.</p>
            <div class="legal-bar__center">
                <a href="#" target="_blank" rel="noopener" class="legal-bar__linkedin">
                    <img src="<?=base_url() ?>html/images/linkedin-b.svg" alt="LinkedIn">
                </a>
            </div>
            <div class="legal-bar__links">
                <ul id="menu-terms" class="menu">
                    <li class="menu-item"><a href="#" data-title="Terms of Use" style="font-size: 14px;">Terms of Use</a></li>
                    <li class="menu-item"><a href="#" data-title="Privacy Policy" style="font-size: 14px;">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- YouTube Modal -->
        <div class="modal modal--video">
            <div class="modal__inner">
                <button class="modal__close">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" opacity="0.2"><polygon fill="#000" fill-rule="nonzero" points="1.5640599 0 0.0499168053 1.51793161 8.48585691 9.97497915 0 18.498749 1.49750416 20 10 11.4929108 18.4858569 20 20 18.4820684 11.5141431 9.97497915 19.9500832 1.51793161 18.4359401 0 10 8.45704754"/></g></svg>
                </button>
                <div class="modal--video__frame">
                    <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Newsletter Modal -->
        <div class="modal modal--newsletter">
            <div class="modal__inner relative mx-auto w-full max-w-xl overflow-hidden rounded-2xl bg-white p-0 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] ring-1 ring-gray-100 sm:w-[560px]">
                
                <button aria-label="Close modal" class="modal__close absolute top-5 right-5 z-10 flex h-12 w-12 m-0 cursor-pointer items-center justify-center rounded-full border-none bg-gray-50 p-0 text-gray-500 transition-all duration-300 hover:bg-gray-200 hover:text-gray-900 focus:outline-none">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <polygon fill-rule="nonzero" points="1.564 0 0.05 1.518 8.486 9.975 0 18.499 1.498 20 10 11.493 18.486 20 20 18.482 11.514 9.975 19.95 1.518 18.436 0 10 8.457"/>
                    </svg>
                </button>

                <div class="relative flex flex-col items-center border-b border-gray-100 bg-gray-50/50 px-10 pb-8 pt-12 text-center sm:px-14 sm:pt-12">
                    <div class="relative mb-5 flex h-20 w-20 items-center justify-center rounded-2xl bg-gradient-to-tr from-[#c49428] to-[#deb455] text-white shadow-lg">
                        <div class="absolute inset-0 rounded-2xl border border-white/20"></div>
                        <svg class="ml-1 h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M1.94607 9.31543C1.42353 9.14125 1.4194 8.86022 1.95682 8.68108L21.043 2.31901C21.5715 2.14285 21.8746 2.43866 21.7265 2.95694L16.2733 22.0432C16.1223 22.5716 15.8177 22.59 15.5944 22.0876L11.9999 14L17.9999 6.00005L9.99992 12L1.94607 9.31543Z"></path>
                        </svg>
                    </div>
                    <h2 class="m-0 text-3xl font-bold tracking-tight text-gray-900">Stay Informed</h2>
                    <p class="m-0 mt-3 text-lg font-medium leading-relaxed text-gray-700">Subscribe for the latest updates and premium packaging solutions from GK POLYPACK.</p>
                </div>

                <div class="w-full px-10 py-10 sm:px-14">
                    <form method="post" id="gform_1" class="m-0 block w-full">
                        <div class="flex w-full flex-col gap-5">
                            <div class="block w-full">
                                <input type="text" id="nl_name" name="nl_name" placeholder="Full Name" aria-label="Full Name" required class="m-0 block h-14 w-full appearance-none rounded-xl border border-gray-300 bg-white px-5 text-lg text-gray-900 transition-all focus:border-[#c49428] focus:outline-none focus:ring-1 focus:ring-[#c49428]" />
                            </div>
                            <div class="block w-full">
                                <input type="email" id="nl_email" name="nl_email" placeholder="Email Address" aria-label="Email Address" required class="m-0 block h-14 w-full appearance-none rounded-xl border border-gray-300 bg-white px-5 text-lg text-gray-900 transition-all focus:border-[#c49428] focus:outline-none focus:ring-1 focus:ring-[#c49428]" />
                            </div>
                        </div>

                        <div class="mt-8 block w-full">
                            <button type="submit" class="group relative m-0 flex h-14 w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl border-none bg-[#c49428] p-0 transition-all duration-300 hover:bg-[#b08420] focus:outline-none focus:ring-2 focus:ring-[#c49428] focus:ring-offset-2">
                                <span class="relative flex h-full w-full items-center justify-center px-6 text-base font-bold uppercase tracking-wider text-white">
                                    Join Our Newsletter
                                    <svg class="ml-2 h-5 w-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </footer>
</div>
<!-- ============================================================= SCRIPTS -->
<script src="<?=base_url() ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?=base_url() ?>assets/js/base.js"></script>
<script src="<?=base_url() ?>assets/js/front-page.js"></script>
<script src="<?=base_url() ?>assets/js/circle-animation.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.querySelector('.site-header');
        if (header) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        }
    });
</script>
<script>
(function(){
    function animateCounter(el){
        var start    = parseInt(el.getAttribute('data-start'),10)  || 0;
        var end      = parseInt(el.getAttribute('data-target'),10) || 0;
        var duration = parseInt(el.getAttribute('data-duration'),10)|| 1500;
        var suffix   = el.getAttribute('data-suffix') || '';
        var range    = end - start;
        var startTime= null;

        function easeOutQuad(t){ return t*(2-t); }

        function step(timestamp){
            if(!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var current  = Math.round(start + range * easeOutQuad(progress));
            el.textContent = current + suffix;
            if(progress < 1) requestAnimationFrame(step);
            else el.textContent = end + suffix;
        }
        requestAnimationFrame(step);
    }

    var counters = document.querySelectorAll('[data-counter]');
    if(!counters.length) return;

    var observer = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    counters.forEach(function(el){ observer.observe(el); });
})();
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const animatedElements = document.querySelectorAll('.sa-fade-up, .sa-fade-left, .sa-fade-right, .sa-zoom-in');
        if (!animatedElements.length) return;
        const scrollObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    requestAnimationFrame(() => {
                        entry.target.classList.add('sa-active');
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: '0px 0px -20px 0px'
        });

        animatedElements.forEach(el => scrollObserver.observe(el));
    });
</script>

</body>
</html>