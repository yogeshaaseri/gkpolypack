 <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Premium Polybag Solutions | GK POLYPACK</title>
    <meta name="description" content="GK POLYPACK is a leading manufacturer of polybags since 2007. We offer Compostable, GRS/RCS, BOPP, Zipper, LDPE and Laminated bags for all industries. ISO 9001:2015 Certified.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
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