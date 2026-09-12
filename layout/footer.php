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