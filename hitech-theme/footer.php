<?php
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();
$email     = get_theme_mod('hitech_email','Hitechkeysolutions@gmail.com');
$maps_url  = hitech_maps_url();
?>
<footer class="site-footer">
    <div class="footer-grid">
        <div class="footer-col">
            <?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(HITECH_URI.'/assets/images/logo.svg'); ?>" alt="Hi-Tech Key Solutions" width="180" />
                </a>
            <?php } ?>
            <p style="font-size:14px;color:rgba(255,255,255,0.5);line-height:1.7;margin-top:16px;">
                Grapevine and Surrounding Areas trusted locksmiths for 25+ years. Fast, professional, and available 24/7.
            </p>
        </div>
        <div class="footer-col">
            <h3 class="footer-col-title">Menu</h3>
            <div class="footer-links">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-link">Home</a>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="footer-link">About Us</a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="footer-link">Services</a>
                <a href="<?php echo esc_url(home_url('/locations/')); ?>" class="footer-link">Locations</a>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="footer-link">Contact Us</a>
            </div>
        </div>
        <div class="footer-col">
            <h3 class="footer-col-title">Our Location</h3>
            <p style="font-size:14px;color:rgba(255,255,255,0.65);margin-bottom:12px;">Serving Grapevine and Surrounding Areas</p>
            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" style="font-size:14px;color:var(--orange);">View on Maps</a>
        </div>
        <div class="footer-col">
            <h3 class="footer-col-title">Contact Us</h3>
            <div class="footer-contact-item">
                <div class="footer-contact-text">
                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                </div>
            </div>
            <div class="footer-contact-item">
                <div class="footer-contact-text">
                    <a href="tel:<?php echo esc_attr( hitech_phone_raw() ); ?>"><?php echo esc_html( hitech_phone() ); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="footer-bottom-inner">
        <p class="footer-copy">&copy; <?php echo date('Y'); ?> Hi Tech Key Solutions. All Rights Reserved.
            Design &amp; Developed by <a href="https://freakymarketing.com" target="_blank" rel="noopener">Freaky Marketing</a>
        </p>
        <div class="footer-terms">
            <a href="#">Terms and Conditions</a>
            <div class="footer-terms-divider"></div>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
</div>
<a href="tel:<?php echo esc_attr( hitech_phone_raw() ); ?>" class="call-float" aria-label="Call Now">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
    Call Now
</a>
<?php wp_footer(); ?>
</body>
</html>
