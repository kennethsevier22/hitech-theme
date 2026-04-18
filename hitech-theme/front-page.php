<?php get_header(); ?>
<?php
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();
$maps_url  = hitech_maps_url();
?>

<!-- ================================================
     HERO SECTION
     ================================================ -->
<section class="hero-section" aria-label="Hero">
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( HITECH_URI . '/assets/images/hero-bg.jpg' ); ?>');"></div>
    <div class="hero-inner">
        <div class="hero-content">

            <!-- Rating badge -->
            <a href="<?php echo esc_url( $maps_url ); ?>" target="_blank" rel="noopener" class="hero-rating">
                <div class="hero-rating-logo">
                    <!-- Real Google G SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="36" height="36">
                        <path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/>
                        <path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/>
                        <path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"/>
                        <path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/>
                    </svg>
                </div>
                <div class="hero-rating-info">
                    <div class="rating-row">
                        <span class="rating-score">4.9</span>
                        <div class="rating-stars">
                            <?php for ($i=0;$i<5;$i++): ?>
                            <svg width="20" height="20" viewBox="0 0 16 16" fill="#FBBC05"><path d="M14.6431 7.17815L11.8306 9.60502L12.6875 13.2344C12.4576 14.1833 11.1562 14.3481L7.99999 12.4056L4.84187 14.3481C3.27789 13.6374 3.31249 13.2344L4.17249 9.60502L1.35999 7.17815C0.987517 6.48232 1.94249 5.37502L5.62999 5.07752L7.05249 1.63502C7.99843 1.00073 8.94437 1.63502L10.3662 5.07752L14.0537 5.37502C14.9455 6.08243 14.6394 7.17877L14.6431 7.17815Z"/></svg>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="rating-label"><?php _e('Google Reviews','hitech'); ?></div>
                </div>
            </a>

            <h1 class="hero-title">
                <?php _e('Trusted Locksmiths Serving', 'hitech'); ?><br>
                <span class="accent"><?php _e('Grapevine and Surrounding Areas', 'hitech'); ?></span>
            </h1>
            <p class="hero-sub">
                <?php _e('Over 25 years serving the Grapevine and Surrounding Areas-fast, professional, and 24/7.', 'hitech'); ?>
            </p>
            <div class="hero-btns">
                <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="primary-btn">
                    <?php _e('Request a Quote','hitech'); ?>
                </a>
                <a href="tel:<?php echo esc_attr( hitech_phone_raw() ); ?>" class="white-btn">
                    <?php printf( __('Call 24/7 - %s','hitech'), esc_html( hitech_phone() ) ); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="left-pattern" aria-hidden="true">
        <svg width="180" height="300" viewBox="0 0 180 300" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.15">
            <circle cx="0" cy="150" r="100" stroke="rgba(251,116,60,0.4)" stroke-width="1" fill="none"/>
            <circle cx="0" cy="150" r="60" stroke="rgba(251,116,60,0.3)" stroke-width="1" fill="none"/>
        </svg>
    </div>
    <div class="right-pattern" aria-hidden="true">
        <svg width="180" height="300" viewBox="0 0 180 300" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.15">
            <circle cx="180" cy="150" r="100" stroke="rgba(251,116,60,0.4)" stroke-width="1" fill="none"/>
            <circle cx="180" cy="150" r="60" stroke="rgba(251,116,60,0.3)" stroke-width="1" fill="none"/>
        </svg>
    </div>
</section>

<!-- ================================================
     COUNTER / STATS SECTION
     ================================================ -->
<section class="counter-section">
    <div class="counter-grid">
        <div class="counter-left">
            <p class="counter-label"><?php _e('24/7 Emergency Service','hitech'); ?></p>
            <h2 class="counter-heading"><?php _e("Grapevine's trusted locksmiths-here when you need us, 24/7.", 'hitech'); ?></h2>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn">
                <?php echo hitech_phone_svg(); ?>
                <?php echo esc_html($phone); ?>
            </a>
            <p class="brand-label"><?php _e('Car Brands We Work With','hitech'); ?></p>
            <div class="logov3-component">
                <div class="logov3-marquee" id="brand-marquee">
                    <?php
                    $brands = ['Ford','Hyundai','Honda','Jeep','Chrysler','Dodge','Kia','Volkswagen',
                               'Toyota','Nissan','Chevrolet','BMW','Audi','Mercedes-Benz'];
                    foreach ($brands as $b): ?>
                    <div class="logov3-item">
                        <svg width="80" height="28" viewBox="0 0 80 28">
                            <text x="4" y="20" font-family="Arial" font-weight="700" font-size="14" fill="white" opacity="0.6"><?php echo esc_html($b); ?></text>
                        </svg>
                    </div>
                    <?php endforeach; ?>
                    <?php foreach ($brands as $b): ?>
                    <div class="logov3-item">
                        <svg width="80" height="28" viewBox="0 0 80 28">
                            <text x="4" y="20" font-family="Arial" font-weight="700" font-size="14" fill="white" opacity="0.6"><?php echo esc_html($b); ?></text>
                        </svg>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="counter-right">
            <div class="counter-stats">
                <div class="stat-box">
                    <div class="stat-number"><span class="counterup" data-target="25">25</span><span class="stat-accent">+</span></div>
                    <div class="stat-label"><?php _e('Years of Experience','hitech'); ?></div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><span class="counterup" data-target="99">99</span><span class="stat-accent">%</span></div>
                    <div class="stat-label"><?php _e('Customer Satisfaction Rate','hitech'); ?></div>
                </div>
                <div class="stat-box">
                    <div class="stat-number"><span class="counterup" data-target="10000">10000</span><span class="stat-accent">+</span></div>
                    <div class="stat-label"><?php _e('Locks Rekeyed &amp; Installed','hitech'); ?></div>
                </div>
                <div class="stat-box">
                    <div class="stat-number">24<span class="stat-accent">/7</span></div>
                    <div class="stat-label"><?php _e('Emergency Response Availability','hitech'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     SERVICES SECTION
     ================================================ -->
<section class="services-section">
    <div class="page-container">
        <div class="section-header center services-header">
            <div class="subheader-wrap">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                <span class="subh-text"><?php _e('Our Services','hitech'); ?></span>
            </div>
            <h2 class="heading-h2"><?php _e('Locksmith Services for Homes and Businesses in Grapevine and Surrounding Areas','hitech'); ?></h2>
            <p class="section-p center"><?php _e('Local, insured, and trusted for 25+ years-fast, professional, and available 24/7 across Grapevine and Surrounding Areas.','hitech'); ?></p>
        </div>

        <div class="services-grid">
            <?php
            $services_top = [
                ['title'=>__('Emergency Lockout','hitech'),         'desc'=>__('24/7 rapid, damage-free entry for homes, cars & businesses — any time, any lock.','hitech'),           'link'=>home_url('/services/emergency-lockout/'),        'icon'=>'<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>'],
                ['title'=>__('Car Key Replacement','hitech'),        'desc'=>__('All makes & models. Transponder, smart keys & fobs cut & programmed at your location.','hitech'),  'link'=>home_url('/services/car-key-replacement/'),      'icon'=>'<path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>'],
                ['title'=>__('Rekey & Master Key Systems','hitech'), 'desc'=>__('New keys, same locks. Change access instantly — set key hierarchies for multi-door properties.','hitech'),'link'=>home_url('/services/rekey-locks/'),              'icon'=>'<path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>'],
            ];
            foreach ($services_top as $s): ?>
            <div class="service-box">
                <div class="service-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--orange)">
                        <?php echo $s['icon']; ?>
                    </svg>
                </div>
                <h3 class="service-title"><?php echo esc_html($s['title']); ?></h3>
                <p class="service-desc"><?php echo esc_html($s['desc']); ?></p>
                <div class="service-btns">
                    <a href="<?php echo esc_url($s['link']); ?>" class="primary-btn"><?php _e('Learn More','hitech'); ?></a>
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="ghost-btn"><?php _e('Call Now','hitech'); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="services-grid-row2">
            <?php
            $services_bot = [
                ['title'=>__('Lock Installation & Repair','hitech'), 'desc'=>__('Deadbolts, lever sets & commercial hardware installed or repaired on any door type.','hitech'),     'link'=>home_url('/services/lock-installation-repair/'), 'icon'=>'<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/>'],
                ['title'=>__('High-Security Locks','hitech'),        'desc'=>__('Pick- & bump-resistant cylinders for maximum home and business protection.','hitech'),              'link'=>home_url('/services/high-security-locks/'),     'icon'=>'<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>'],
                ['title'=>__('Residential Locksmith','hitech'),       'desc'=>__('Home lockouts, lock installation, rekeying & full security upgrades 24/7.','hitech'),               'link'=>home_url('/services/residential-locksmith/'),   'icon'=>'<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>'],
                ['title'=>__('Commercial Locksmith','hitech'),        'desc'=>__('Business lockouts, master key systems & access control for DFW companies.','hitech'),             'link'=>home_url('/services/commercial-locksmith/'),    'icon'=>'<path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>'],
                ['title'=>__('Smart Lock Installation','hitech'),     'desc'=>__('Keypad, Bluetooth & WiFi smart locks installed & configured for any property.','hitech'),          'link'=>home_url('/services/smart-lock-installation/'), 'icon'=>'<path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"/>'],
                ['title'=>__('Access Control Systems','hitech'),      'desc'=>__('Keypad, card reader & cloud-based access control for homes & businesses.','hitech'),               'link'=>home_url('/services/access-control/'),          'icon'=>'<path d="M20 4H4c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>'],
            ];
            foreach ($services_bot as $s): ?>
            <div class="service-box">
                <div class="service-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--orange)">
                        <?php echo $s['icon']; ?>
                    </svg>
                </div>
                <h3 class="service-title"><?php echo esc_html($s['title']); ?></h3>
                <p class="service-desc"><?php echo esc_html($s['desc']); ?></p>
                <div class="service-btns">
                    <a href="<?php echo esc_url($s['link']); ?>" class="primary-btn"><?php _e('Learn More','hitech'); ?></a>
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="ghost-btn"><?php _e('Call Now','hitech'); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="services-bottom-btn">
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="primary-btn"><?php _e('See All Services','hitech'); ?></a>
        </div>
    </div>
    <div class="left-pattern" aria-hidden="true"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="0" cy="130" r="90" stroke="rgba(251,116,60,0.08)" stroke-width="1" fill="none"/></svg></div>
    <div class="right-pattern" aria-hidden="true"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="160" cy="130" r="90" stroke="rgba(251,116,60,0.08)" stroke-width="1" fill="none"/></svg></div>
</section>

<!-- ================================================
     ABOUT SECTION
     ================================================ -->
<section class="about-section">
    <div class="page-container">
        <div class="about-grid">
            <div class="about-img-wrap">
                <img src="<?php echo esc_url(HITECH_URI.'/assets/images/about.jpg'); ?>"
                     alt="<?php _e('Hi-Tech Key Solutions locksmith technician','hitech'); ?>"
                     loading="lazy" />
            </div>
            <div class="about-content">
                <div class="subheader-wrap">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                    <span class="subh-text"><?php _e('About Us','hitech'); ?></span>
                </div>
                <h2 class="about-heading"><?php _e('Trusted Locksmiths Serving Grapevine and Surrounding Areas','hitech'); ?></h2>
                <p class="about-para"><?php _e("At Hi-Tech Key Solutions, your safety comes first. Locally owned, insured, and trusted for more than 25 years, we serve the Grapevine and Surrounding Areas with responsive, professional locksmith work backed by honest pricing and dependable craftsmanship.",'hitech'); ?></p>
                <p class="about-para"><?php _e("Our certified technicians provide transparent, efficient, and tailored solutions-whether you're locked out, need a car key replacement, want to rekey after a move, or plan a complete security upgrade with high-security or smart locks. We're ready 24/7 to ensure you always feel safe, protected, and back to normal fast.",'hitech'); ?></p>
                <div class="about-btns">
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn">
                        <?php echo hitech_phone_svg(); ?>
                        <?php echo esc_html($phone); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="primary-btn"><?php _e('Learn More','hitech'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     WHY CHOOSE US SECTION
     ================================================ -->
<section class="wcu-section">
    <div class="page-container">
        <div class="wcu-header section-header">
            <div class="subheader-wrap" style="justify-content:center;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                <span class="subh-text"><?php _e('Why Choose Us','hitech'); ?></span>
            </div>
            <h2 class="heading-h2" style="color:var(--white);"><?php _e('Why Choose Hi-Tech Key Solutions?','hitech'); ?></h2>
            <p class="section-p center" style="color:rgba(255,255,255,0.6);"><?php _e('Experience unmatched locksmith services with a commitment to reliability, speed, and your security','hitech'); ?></p>
        </div>

        <div class="wcu-grid">
            <div class="wcu-list">
                <?php
                $wcu_left = [
                    ['title'=>__('Tailored Solutions','hitech'), 'text'=>__('We go beyond standard locksmith services, offering personalized solutions to meet your unique needs.','hitech'), 'icon'=>'<path d="M20.94 13.45C21.06 13.58 21.15 13.74 21.21 13.91C21.26 14.08 21.27 14.26 21.24 14.43L20.62 18.85C20.59 19.02 20.5 19.18 20.36 19.3C20.22 19.42 20.04 19.49 19.85 19.49H15.8C15.1 19.49 14.41 19.36 13.76 19.13L12.11 18.54V13.85C13 13.56 14.52 12.93 15 11.93C15.38 11.04 15.51 10.07 15.4 9.11V8.55C15.72 8.56 16.03 8.67 16.27 8.86C16.72 9.2 17.39 10.08 16.87 12.12C16.84 12.22 16.84 12.34 16.86 12.44C16.88 12.55 16.93 12.66 17 12.74C17.07 12.83 17.16 12.91 17.26 12.96C17.36 13.01 17.48 13.04 17.59 13.04H19.98C20.16 13.04 20.34 13.07 20.51 13.14C20.68 13.21 20.83 13.32 20.94 13.45Z"/>'],
                    ['title'=>__('Expert Technicians','hitech'), 'text'=>__('Our skilled professionals use the latest tools and techniques to ensure quality results every time.','hitech'), 'icon'=>'<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>'],
                ];
                foreach ($wcu_left as $w): ?>
                <div class="wcu-card">
                    <div class="wcu-icon-wrap">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--orange)">
                            <?php echo $w['icon']; ?>
                        </svg>
                    </div>
                    <div>
                        <h3 class="wcu-card-title"><?php echo esc_html($w['title']); ?></h3>
                        <p class="wcu-card-text"><?php echo esc_html($w['text']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="wcu-middle">
                <div class="wcu-middle-inner">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="white"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                    <p class="wcu-middle-text"><?php _e('Hi-Tech Key Solutions','hitech'); ?></p>
                </div>
            </div>

            <div class="wcu-list">
                <?php
                $wcu_right = [
                    ['title'=>__('Fast & Reliable Service','hitech'), 'text'=>__('Our expert technicians are available 24/7 to provide prompt assistance when you need it most.','hitech'), 'icon'=>'<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>'],
                    ['title'=>__('Wide Brand Coverage','hitech'), 'text'=>__('We service all major vehicle and home lock brands, ensuring reliable solutions for any system.','hitech'), 'icon'=>'<path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>'],
                ];
                foreach ($wcu_right as $w): ?>
                <div class="wcu-card">
                    <div class="wcu-icon-wrap">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--orange)">
                            <?php echo $w['icon']; ?>
                        </svg>
                    </div>
                    <div>
                        <h3 class="wcu-card-title"><?php echo esc_html($w['title']); ?></h3>
                        <p class="wcu-card-text"><?php echo esc_html($w['text']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="wcu-cta">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn"><?php echo hitech_phone_svg(); ?><?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" class="rating-badge">
                <div class="rating-badge-logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32"><path fill="#4285F4" d="M45.12 24.5c0-1.56-.14-3.06-.4-4.5H24v8.51h11.84c-.51 2.75-2.06 5.08-4.39 6.64v5.52h7.11c4.16-3.83 6.56-9.47 6.56-16.17z"/><path fill="#34A853" d="M24 46c5.94 0 10.92-1.97 14.56-5.33l-7.11-5.52c-1.97 1.32-4.49 2.1-7.45 2.1-5.73 0-10.58-3.87-12.31-9.07H4.34v5.7C7.96 41.07 15.4 46 24 46z"/><path fill="#FBBC05" d="M11.69 28.18C11.25 26.86 11 25.45 11 24s.25-2.86.69-4.18v-5.7H4.34C2.85 17.09 2 20.45 2 24c0 3.55.85 6.91 2.34 9.88l7.35-5.7z"/><path fill="#EA4335" d="M24 10.75c3.23 0 6.13 1.11 8.41 3.29l6.31-6.31C34.91 4.18 29.93 2 24 2 15.4 2 7.96 6.93 4.34 14.12l7.35 5.7c1.73-5.2 6.58-9.07 12.31-9.07z"/></svg></div>
                <div class="rating-badge-info">
                    <div class="stars"><?php for($i=0;$i<5;$i++): ?><svg width="18" height="18" viewBox="0 0 24 24" fill="#FBBC05"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?></div>
                    <div class="score">4.9</div>
                    <div class="label"><?php _e('Google Reviews','hitech'); ?></div>
                </div>
            </a>
        </div>
    </div>
    <div class="left-pattern wcu"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="0" cy="130" r="90" stroke="rgba(251,116,60,0.08)" stroke-width="1" fill="none"/></svg></div>
    <div class="right-pattern wcu"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="160" cy="130" r="90" stroke="rgba(251,116,60,0.08)" stroke-width="1" fill="none"/></svg></div>
</section>

<!-- ================================================
     BENEFITS SECTION
     ================================================ -->
<section class="benefits-section">
    <div class="page-container">
        <div class="benefits-grid">
            <div>
                <div class="subheader-wrap">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                    <span class="subh-text"><?php _e('Benefit','hitech'); ?></span>
                </div>
                <h2 class="heading-h2" style="margin-bottom:32px;"><?php _e('Top 3 Benefits of Choosing Us','hitech'); ?></h2>
                <div class="checklist">
                    <?php
                    $benefits = [
                        ['title'=>__('Fast & Reliable Service','hitech'),'text'=>__('Immediate response, 24/7 availability-because emergencies don\'t wait.','hitech')],
                        ['title'=>__('Wide Brand Coverage','hitech'),'text'=>__('Service for all major vehicle and lock brands.','hitech')],
                        ['title'=>__('Expert Technicians','hitech'),'text'=>__('Certified professionals with the skills to handle any locksmith challenge.','hitech')],
                    ];
                    foreach ($benefits as $b): ?>
                    <div class="check-item">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="var(--orange)"/><path d="M22 11L13.5 21L10 17" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <div>
                            <h3 class="check-title"><?php echo esc_html($b['title']); ?></h3>
                            <p class="check-text"><?php echo esc_html($b['text']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="about-btns">
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn" style="margin-top:24px;">
                        <?php echo hitech_phone_svg(); ?><?php echo esc_html($phone); ?>
                    </a>
                </div>
            </div>
            <div>
                <!-- Embedded review card + image -->
                <div class="review-card" style="margin-bottom:24px;">
                    <div class="reviewer-name">Suzette Cabrera</div>
                    <div class="reviewer-stars">
                        <?php for($i=0;$i<5;$i++): ?><svg width="18" height="18" viewBox="0 0 24 24" fill="#FBBC05"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?>
                    </div>
                    <p class="reviewer-text"><?php _e('10/10 RECOMMEND! 2 people came before Ken and told us they could not help. When Ken came he quickly figured out what the problem was, gave us extra keys and programmed them to our truck! Worth the price and time he finished within 15 minutes!','hitech'); ?></p>
                </div>
                <img src="<?php echo esc_url(HITECH_URI.'/assets/images/benefit.jpg'); ?>"
                     alt="<?php _e('Locksmith at work','hitech'); ?>"
                     style="width:100%;height:280px;object-fit:cover;border-radius:12px;"
                     loading="lazy" />
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     PROCESS SECTION
     ================================================ -->
<section class="process-section">
    <div class="page-container">
        <div class="section-header center" style="margin-bottom:52px;">
            <div class="subheader-wrap" style="justify-content:center;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                <span class="subh-text"><?php _e('Our Process','hitech'); ?></span>
            </div>
            <h2 class="heading-h2"><?php _e('How Our Service Process Works','hitech'); ?></h2>
            <p class="section-p center"><?php _e('A simple, step-by-step approach to get you the help you need-fast and reliably.','hitech'); ?></p>
        </div>
        <div class="process-inner">
            <div class="process-img">
                <img src="<?php echo esc_url(HITECH_URI.'/assets/images/process.jpg'); ?>"
                     alt="<?php _e('Locksmith service process','hitech'); ?>"
                     loading="lazy" />
            </div>
            <div class="process-steps">
                <?php
                $steps = [
                    ['title'=>__('Contact Us','hitech'), 'text'=>__('Give us a call or fill out our online form to describe your needs.','hitech'), 'icon'=>'<path d="M12.625 17.6887C11.2666 18.2781 10.0859 19.2123 9.2 20.3988C9.08821 20.5473 9.02006 20.7241 9.00319 20.9093C8.98632 21.0944 9.0214 21.2806 9.10449 21.4469C9.18759 21.6133 9.31541 21.7531 9.4736 21.8508C9.63178 21.9485 9.81408 22.0002 10 22H22C22.1859 22.0002 22.3682 21.9485 22.5264 21.8508C22.6846 21.7531 22.8124 21.6133 22.8955 21.4469C22.9786 21.2806 23.0137 21.0944 22.9968 20.9093C22.9799 20.7241 22.9118 20.5473 22.8 20.3988C21.9141 19.2123 20.7334 18.2781 19.375 17.6887C20.1196 17.0089 20.6413 16.1199 20.8716 15.1382C21.1019 14.1566 21.03 13.1283 20.6654 12.1883C20.3009 11.2482 19.6606 10.4404 18.8287 9.87072C17.9967 9.30106 17.012 8.99623 16.0037 8.99623C14.9955 8.99623 14.0108 9.30106 13.1788 9.87072C12.3469 10.4404 11.7066 11.2482 11.3421 12.1883C10.9775 13.1283 10.9056 14.1566 11.1359 15.1382C11.3662 16.1199 11.8879 17.0089 12.6325 17.6887H12.625Z"/>'],
                    ['title'=>__('Get a Free Estimate','hitech'), 'text'=>__('Receive a clear and upfront price estimate for the service.','hitech'), 'icon'=>'<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>'],
                    ['title'=>__('Schedule a Service','hitech'), 'text'=>__('Book a time that works best for you-or request immediate assistance for emergencies.','hitech'), 'icon'=>'<path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>'],
                    ['title'=>__('Enjoy Peace of Mind','hitech'), 'text'=>__('Our expert technicians arrive promptly and complete the job efficiently.','hitech'), 'icon'=>'<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>'],
                ];
                foreach ($steps as $s): ?>
                <div class="process-step">
                    <div class="step-icon-wrap">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <?php echo $s['icon']; ?>
                        </svg>
                    </div>
                    <div>
                        <h3 class="step-title"><?php echo esc_html($s['title']); ?></h3>
                        <p class="step-text"><?php echo esc_html($s['text']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <div style="padding-top:28px;">
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn">
                        <?php echo hitech_phone_svg(); ?><?php echo esc_html($phone); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     CTA BANNER
     ================================================ -->
<section class="cta-section">
    <div class="cta-inner">
        <div>
            <h2 class="cta-heading"><?php _e('Get Fast &amp; Reliable Locksmith Services Now!','hitech'); ?></h2>
            <p class="cta-text"><?php _e("Lost your car key? Locked out of your home? Need a quick replacement? Our expert locksmiths are available 24/7 to get you back on track in minutes.",'hitech'); ?></p>
            <div class="cta-checklist">
                <p class="cta-check">✅ <strong><?php _e('Fast Response Time','hitech'); ?></strong> - <?php _e('We come to you ASAP.','hitech'); ?></p>
                <p class="cta-check">✅ <strong><?php _e('Expert Technicians','hitech'); ?></strong> - <?php _e('Skilled professionals you can trust.','hitech'); ?></p>
                <p class="cta-check">✅ <strong><?php _e('Wide Brand Coverage','hitech'); ?></strong> - <?php _e('We service all major lock brands.','hitech'); ?></p>
            </div>
        </div>
        <div class="cta-buttons">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="white-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.8472 15.3554L16.4306 13.3764C16.1892 13.2727 15.939 13.2333 15.6907 13.2562C15.4424 13.2792 15.2037 13.3636 14.9963 13.502L12.6441 15.4998C11.1984 14.7976 9.70595 13.3164 9.00376 11.8895L10.9519 9.57294C11.1407 9.29384 11.2229 9.05667 11.2445 8.81035C11.2661 8.56402 11.2264 8.31618 11.1291 8.08887L9.14438 3.65356C9.0157 3.35662 8.79444 3.10926 8.51362 2.94841C8.2328 2.78756 7.9075 2.72184 7.58626 2.76106C6.31592 2.92822 5.14986 3.55209 4.30588 4.51615C3.4619 5.48021 2.99771 6.71852 3.00001 7.99981C3.00001 15.4436 9.05626 21.4998 16.5 21.4998C17.7813 21.5021 19.0196 21.0379 19.9837 20.1939C20.9477 19.35 21.5716 18.1839 21.7388 16.9136C21.7781 16.5924 21.7125 16.2672 21.5518 15.9864C21.3911 15.7056 21.144 15.4843 20.8472 15.3554Z"/></svg>
                <?php echo esc_html($phone); ?>
            </a>
            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" class="rating-badge">
                <div class="rating-badge-info">
                    <div class="stars"><?php for($i=0;$i<5;$i++): ?><svg width="18" height="18" viewBox="0 0 24 24" fill="#FBBC05"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?></div>
                    <div class="score">4.9</div>
                    <div class="label"><?php _e('Google Reviews','hitech'); ?></div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ================================================
     TESTIMONIALS SECTION
     ================================================ -->
<section class="testimonials-section">
    <div class="page-container">
        <div class="testimonials-header section-header">
            <div class="subheader-wrap" style="justify-content:center;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                <span class="subh-text"><?php _e('Testimonials','hitech'); ?></span>
            </div>
            <h2 class="heading-h2"><?php _e('What Our Customers Are Saying','hitech'); ?></h2>
            <p class="section-p center"><?php _e('Hear from satisfied clients who trust Hi-Tech Key Solutions for their locksmith needs.','hitech'); ?></p>
        </div>
        <div class="slider-container" id="testimonial-slider">
            <div class="slider-track" id="slider-track">
                <?php
                $reviews = [
                    ['name'=>'Edwin M',       'text'=>__("10/10 RECOMMEND! 2 people came before Ken and told us they could not help. When Ken came he quickly figured out what the problem was, gave us extra keys and programmed them to our truck! Worth the price and time he finished within 15 minutes!",'hitech')],
                    ['name'=>'Haran Perales', 'text'=>__("I lost my key and called them they were here within the hour, and only took about 20 minutes to get me a new car key and turn off some safety controls that were on my car when I bought it! If I ever need a lock smith again I'll be using this one! Very friendly and fast!",'hitech')],
                    ['name'=>'Dennis Rambosa','text'=>__("I spent 3 days looking for the only key I had to start my car. When I finally accepted defeat I called Hi Tech Key Solutions. They answered the phone promptly and politely. Once we identified my car, the appointment was set in minutes.",'hitech')],
                    ['name'=>'Emily Zavala',  'text'=>__("I highly recommend Ken! He is absolutely fantastic. From the moment I called, he answered promptly and was so easy to communicate with. Unlike other services I've tried, they didn't leave me hanging or make me wait unnecessarily. They arrived on time.",'hitech')],
                    ['name'=>'Gina Carter',   'text'=>__("Hi tech gave amazing, fast and quick service! Kenneth was soo friendly and got the job done with a smile!",'hitech')],
                    ['name'=>'Zack Collins',  'text'=>__("Awesome service! Hi tech came within 10 minutes of my call and took literally 5 seconds to open my truck that had my keys locked in.",'hitech')],
                    ['name'=>'Tracy Jennings','text'=>__("I want to thank you very much for being prompt. I will most definitely share your information with my family and friends. Your customer service was top notch.",'hitech')],
                    ['name'=>'Michelle Rivera','text'=>__("He saved the day a while back for my Chevy Impala. Very fast and affordable.",'hitech')],
                ];
                foreach ($reviews as $r): ?>
                <div class="slide">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">
                            <?php for($i=0;$i<5;$i++): ?>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#FBBC05"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial-text">"<?php echo esc_html($r['text']); ?>"</p>
                        <div class="testimonial-author">
                            <div>
                                <div class="author-name"><?php echo esc_html($r['name']); ?></div>
                                <div class="author-platform">Google</div>
                            </div>
                            <div class="testimonial-logo">
                                <svg width="60" height="20" viewBox="0 0 60 20"><text x="0" y="15" font-family="Arial" font-weight="bold" font-size="14"><tspan fill="#4285F4">G</tspan><tspan fill="#EA4335">o</tspan><tspan fill="#FBBC04">o</tspan><tspan fill="#4285F4">g</tspan><tspan fill="#34A853">l</tspan><tspan fill="#EA4335">e</tspan></text></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="slider-arrows">
                <button class="slider-arrow" id="prev-slide" aria-label="Previous review">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                </button>
                <button class="slider-arrow" id="next-slide" aria-label="Next review">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </button>
            </div>
            <div class="slider-nav" id="slider-nav"></div>
        </div>
    </div>
</section>

<!-- ================================================
     CONTACT / MAPS SECTION
     ================================================ -->
<section class="contact-section">
    <div class="page-container">
        <div class="section-header center" style="margin-bottom:48px;">
            <div class="subheader-wrap" style="justify-content:center;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
                <span class="subh-text"><?php _e('Contact Us','hitech'); ?></span>
            </div>
            <h2 class="heading-h2"><?php _e('Serving The Entire Grapevine and Surrounding Areas','hitech'); ?></h2>
            <p class="section-p center"><?php _e("Whether you're locked out or need a quick quote, we're here to help-call, text, or drop us a message anytime!",'hitech'); ?></p>
        </div>
        <div class="contact-grid">
            <div class="map-wrap">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229954.5321989975!2d-96.8963620551417!3d32.82084512629609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9b7c4f41cd09%3A0xa0bdf89c1685d3e0!2sHi-Tech%20Key%20Solutions!5e1!3m2!1sen!2sus!4v1733561085715!5m2!1sen!2sus"
                    title="<?php _e('Hi-Tech Key Solutions Location','hitech'); ?>"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <?php hitech_contact_form(); ?>
        </div>
    </div>
    <div class="left-pattern"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="0" cy="130" r="90" stroke="rgba(251,116,60,0.06)" stroke-width="1" fill="none"/></svg></div>
    <div class="right-pattern"><svg width="160" height="260" viewBox="0 0 160 260" fill="none"><circle cx="160" cy="130" r="90" stroke="rgba(251,116,60,0.06)" stroke-width="1" fill="none"/></svg></div>
</section>

<?php get_footer(); ?>
