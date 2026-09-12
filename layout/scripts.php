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