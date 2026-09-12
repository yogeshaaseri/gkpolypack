<!DOCTYPE html>
<html lang="en-US">
<head>
<?php require_once 'layout/head.php'; ?>
<style>
    .contact-input {
        font-size: 1.15rem !important;
        line-height: 1.6 !important;
        border: 1.5px solid #cbd5e1;
        transition: all 0.3s ease;
    }
    .contact-input:focus {
        border-color: #d19220 !important;
        box-shadow: 0 0 0 4px rgba(209, 146, 32, 0.18) !important;
        outline: none !important;
    }
    .contact-label {
        font-size: 1.05rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        color: #0b2644;
        display: block;
        margin-bottom: 0.5rem;
    }
</style>
</head>
<body>
<?php require_once 'layout/navbar.php'; ?>
<section class="relative bg-[#0b2644] text-white pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#d19220_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="container relative z-10 text-center px-4">
        <span class="text-[#d19220] font-bold tracking-widest uppercase text-xl md:text-3xl sa-fade-up sa-delay-1 block mb-3">
            Connect With GK POLYPACK
        </span>
        <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight sa-fade-up sa-delay-2 text-white mb-6 leading-tight">
            Get in Touch With Our Packaging Specialists
        </h1>
        <p class="text-lg lg:text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed sa-fade-up sa-delay-3 font-normal">
            Have custom size requirements or need bulk quotes? Our technical team provides fast pricing, material samples, and factory specification support.
        </p>
    </div>
</section>

<section class="py-20 bg-gray-50 border-b border-gray-200/80">
    <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200/80 sa-fade-up sa-delay-1 hover:shadow-xl transition-all duration-300 group">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 text-[#d19220] flex items-center justify-center text-3xl mb-6 group-hover:bg-[#d19220] group-hover:text-white transition-colors">
                    <i class="ri-phone-line"></i>
                </div>
                <span class="text-sm font-bold uppercase tracking-wider text-gray-400 block mb-2">Bulk Orders &amp; Inquiries</span>
                <h3 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-4">Direct Sales &amp; Support</h3>
                <a href="tel:+919592696910" class="block text-xl md:text-2xl font-bold text-gray-800 hover:text-[#d19220] transition-colors mb-2">+91 95926 96910</a>
                <a href="mailto:raman@gkpolypacks.com" class="block text-base md:text-lg font-semibold text-gray-500 hover:text-[#d19220] transition-colors break-all">raman@gkpolypacks.com</a>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200/80 sa-fade-up sa-delay-3 hover:shadow-xl transition-all duration-300 group">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 text-[#d19220] flex items-center justify-center text-3xl mb-6 group-hover:bg-[#d19220] group-hover:text-white transition-colors">
                    <i class="ri-map-pin-line"></i>
                </div>
                <span class="text-sm font-bold uppercase tracking-wider text-gray-400 block mb-2">Manufacturing Plant</span>
                <h3 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-4">Factory &amp; HQ</h3>
                <p class="text-gray-600 text-lg md:text-xl leading-relaxed m-0 font-medium">
                    Bahader k road Ludhiana Punjab
                </p>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200/80 sa-fade-up sa-delay-4 hover:shadow-xl transition-all duration-300 group">
                <div class="w-16 h-16 rounded-xl bg-[#0b2644]/5 text-[#d19220] flex items-center justify-center text-3xl mb-6 group-hover:bg-[#d19220] group-hover:text-white transition-colors">
                    <i class="ri-time-line"></i>
                </div>
                <span class="text-sm font-bold uppercase tracking-wider text-gray-400 block mb-2">Shift Timings</span>
                <h3 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-4">Working Hours</h3>
                <p class="text-gray-800 font-bold text-lg md:text-xl mb-1">Mon - Sat: 9 AM - 7 PM</p>
                <p class="text-gray-500 font-semibold text-base m-0">Production runs 24x7</p>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================= CONTACT FORM & DETAILS -->
<section class="py-24 bg-white">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <div class="lg:col-span-7 sa-fade-left sa-delay-1">
                <div class="bg-gray-50 border border-gray-200 p-8 sm:p-12 rounded-3xl shadow-sm">
                    <span class="text-[#d19220] font-bold text-sm md:text-2xl uppercase tracking-wider block mb-3">
                        Get In Touch
                    </span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#0b2644] mb-4 leading-snug">
                        Send Us A Message
                    </h2>
                    <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-8">
                        Have a query, feedback, or need more information about our company? Fill out the form below and our team will get back to you shortly.
                    </p>

                    <form action="<?=base_url('contact/submit') ?>" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="fullname" class="contact-label">Full Name *</label>
                                <input type="text" id="fullname" name="fullname" required placeholder="e.g. Rahul Sharma" class="contact-input w-full px-5 py-4 rounded-xl bg-white text-gray-900">
                            </div>
                            <div>
                                <label for="company" class="contact-label">Company Name</label>
                                <input type="text" id="company" name="company" placeholder="e.g. ABC Textiles Ltd" class="contact-input w-full px-5 py-4 rounded-xl bg-white text-gray-900">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="contact-label">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="e.g. rahul@company.com" class="contact-input w-full px-5 py-4 rounded-xl bg-white text-gray-900">
                            </div>
                            <div>
                                <label for="phone" class="contact-label">Phone / Mobile *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="e.g. +91 98765 43210" class="contact-input w-full px-5 py-4 rounded-xl bg-white text-gray-900">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="contact-label">Your Message *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Write your message or inquiry details here..." class="contact-input w-full px-5 py-4 rounded-xl bg-white text-gray-900"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full sm:w-auto px-12 py-5 rounded-xl bg-[#d19220] hover:bg-[#b87c1a] text-white font-bold text-xl md:text-2xl shadow-xl transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 cursor-pointer border-none">
                                <span>Send Message</span>
                                <i class="ri-arrow-right-line text-2xl"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="lg:col-span-5 space-y-10 sa-fade-right sa-delay-2">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded-3xl">
                    <h4 class="text-2xl md:text-3xl font-bold text-[#0b2644] mb-6">Why Work With GK POLYPACK?</h4>
                    <ul class="space-y-8 m-0 p-0 list-none">
                        <li class="flex items-start gap-4 text-gray-700 text-lg md:text-2xl leading-relaxed">
                            <span class="text-[#d19220] text-3xl shrink-0 mt-0.5"><i class="ri-checkbox-circle-fill"></i></span>
                            <span><strong>ISO 9001:2015</strong> certified manufacturing facility with strict thickness tolerance.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700 text-lg md:text-2xl leading-relaxed">
                            <span class="text-[#d19220] text-3xl shrink-0 mt-0.5"><i class="ri-checkbox-circle-fill"></i></span>
                            <span><strong>CPCB &amp; GRS/RCS Approved</strong> eco-friendly and recycled films for global compliance.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700 text-lg md:text-2xl leading-relaxed">
                            <span class="text-[#d19220] text-3xl shrink-0 mt-0.5"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Direct manufacturer rates with bulk logistics and verified container stuffing.</span>
                        </li>
                        <li class="flex items-start gap-4 text-gray-700 text-lg md:text-2xl leading-relaxed">
                            <span class="text-[#d19220] text-3xl shrink-0 mt-0.5"><i class="ri-checkbox-circle-fill"></i></span>
                            <span>Free material sample batches for verified industrial and export buyers.</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="relative bg-gray-200 border-t border-gray-300">
    <div class="w-full h-[450px] md:h-[550px]">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112061.35338981206!2d77.10249019999999!3d28.6322964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0; filter: grayscale(15%) contrast(1.05);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="GK POLYPACK Location Map">
        </iframe>
    </div>
</section>

<?php require_once 'layout/footer.php'; ?>
<?php require_once 'layout/scripts.php'; ?>
</body>
</html>