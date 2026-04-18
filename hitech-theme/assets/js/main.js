/**
 * Hi-Tech Key Solutions - main.js
 * Mobile nav | Testimonial slider | Counter animation | Contact form AJAX
 */

(function($) {
    'use strict';

    /* ================================================
       MOBILE NAVIGATION
       ================================================ */
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');

    if (hamburger && mobileNav) {
        hamburger.addEventListener('click', function() {
            const isOpen = mobileNav.classList.toggle('open');
            hamburger.setAttribute('aria-expanded', isOpen);
            // Animate hamburger to X
            hamburger.querySelectorAll('span')[0].style.transform = isOpen ? 'translateY(7px) rotate(45deg)' : '';
            hamburger.querySelectorAll('span')[1].style.opacity    = isOpen ? '0' : '';
            hamburger.querySelectorAll('span')[2].style.transform = isOpen ? 'translateY(-7px) rotate(-45deg)' : '';
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (!hamburger.contains(e.target) && !mobileNav.contains(e.target)) {
                mobileNav.classList.remove('open');
                hamburger.setAttribute('aria-expanded', 'false');
                hamburger.querySelectorAll('span').forEach(s => s.style = '');
            }
        });
    }

    /* ================================================
       TESTIMONIAL SLIDER
       ================================================ */
    const sliderTrack = document.getElementById('slider-track');
    const sliderNav   = document.getElementById('slider-nav');
    const prevBtn     = document.getElementById('prev-slide');
    const nextBtn     = document.getElementById('next-slide');

    if (sliderTrack) {
        const slides     = sliderTrack.querySelectorAll('.slide');
        const totalSlides = slides.length;
        let current = 0;
        let autoplayTimer;

        // Build dots
        if (sliderNav) {
            slides.forEach((_, i) => {
                const dot = document.createElement('button');
                dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
                dot.setAttribute('aria-label', 'Go to review ' + (i + 1));
                dot.addEventListener('click', () => goTo(i));
                sliderNav.appendChild(dot);
            });
        }

        function goTo(index) {
            current = (index + totalSlides) % totalSlides;
            sliderTrack.style.transform = 'translateX(-' + (current * 100) + '%)';
            if (sliderNav) {
                sliderNav.querySelectorAll('.slider-dot').forEach((d, i) => {
                    d.classList.toggle('active', i === current);
                });
            }
        }

        function startAutoplay() {
            autoplayTimer = setInterval(() => goTo(current + 1), 5000);
        }

        function resetAutoplay() {
            clearInterval(autoplayTimer);
            startAutoplay();
        }

        if (prevBtn) prevBtn.addEventListener('click', () => { goTo(current - 1); resetAutoplay(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { goTo(current + 1); resetAutoplay(); });

        // Touch/swipe support
        let touchStartX = 0;
        sliderTrack.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
        sliderTrack.addEventListener('touchend', e => {
            const diff = touchStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 50) { goTo(diff > 0 ? current + 1 : current - 1); resetAutoplay(); }
        });

        startAutoplay();
    }

    /* ================================================
       COUNTER ANIMATION
       ================================================ */
    function animateCounter(el) {
        const target   = parseInt(el.getAttribute('data-target') || el.textContent, 10);
        const duration = 2000;
        const step     = target / (duration / 16);
        let current    = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            el.textContent = Math.floor(current).toLocaleString();
        }, 16);
    }

    const counterEls = document.querySelectorAll('.counterup');
    if (counterEls.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });
        counterEls.forEach(el => observer.observe(el));
    }

    
  /* ================================================
       CONTACT FORM AJAX SUBMISSION
       ================================================ */
    const contactForm = document.getElementById('hitech-contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn  = contactForm.querySelector('.form-submit');
            const successMsg = document.getElementById('form-success');
            const errorMsg   = document.getElementById('form-error');
            const nonce      = document.querySelector('[name="hitech_nonce_field"]');

            // Loading state
            const originalText   = submitBtn.textContent;
            submitBtn.textContent = 'Sending…';
            submitBtn.disabled    = true;
            errorMsg.style.display = 'none';

            const formData = new FormData();
            formData.append('action',  'hitech_contact');
            formData.append('nonce',   nonce ? nonce.value : '');
            formData.append('name',    contactForm.querySelector('[name="name"]').value);
            formData.append('phone',   contactForm.querySelector('[name="phone"]').value);
            formData.append('email',   contactForm.querySelector('[name="email"]').value || '');
            formData.append('service', contactForm.querySelector('[name="service"]').value);
            formData.append('message', contactForm.querySelector('[name="message"]').value || '');

            fetch(
                (typeof HiTechData !== 'undefined' ? HiTechData.ajaxUrl : '/wp-admin/admin-ajax.php'),
                { method: 'POST', body: formData }
            )
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    contactForm.style.display    = 'none';
                    successMsg.style.display     = 'block';
                } else {
                    errorMsg.textContent         = data.data.message || 'Something went wrong. Please try again.';
                    errorMsg.style.display       = 'block';
                    submitBtn.textContent        = originalText;
                    submitBtn.disabled           = false;
                }
            })
            .catch(() => {
                errorMsg.textContent   = 'Network error. Please call us directly.';
                errorMsg.style.display = 'block';
                submitBtn.textContent  = originalText;
                submitBtn.disabled     = false;
            });
        });
    }

    /* ================================================
       STICKY HEADER SHADOW ON SCROLL
       ================================================ */
    const siteHeader = document.querySelector('.site-header');
    if (siteHeader) {
        window.addEventListener('scroll', () => {
            siteHeader.style.boxShadow = window.scrollY > 20
                ? '0 4px 24px rgba(0,0,0,0.14)'
                : '0 2px 20px rgba(0,0,0,0.08)';
        }, { passive: true });
    }

})(jQuery);
