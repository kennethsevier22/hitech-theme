<?php /* Template Name: Services */ get_header(); ?>
<!-- Hi-Tech Key Solutions - Services Page Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Locksmith Services Grapevine TX",
  "url": "https://hitechkeysolutions.com/services/",
  "description": "Hi-Tech Key Solutions offers full locksmith services in Grapevine TX — emergency lockouts, car key replacement, rekeying, high-security lock installation, and more. Available 24/7.",
  "provider": {
    "@type": "Locksmith",
    "name": "Hi-Tech Key Solutions",
    "telephone": "+18447131898",
    "url": "https://hitechkeysolutions.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Grapevine",
      "addressRegion": "TX",
      "addressCountry": "US"
    }
  },
  "areaServed": [
    {"@type": "City", "name": "Grapevine"},
    {"@type": "City", "name": "Southlake"},
    {"@type": "City", "name": "Colleyville"},
    {"@type": "City", "name": "Euless"},
    {"@type": "City", "name": "Bedford"},
    {"@type": "City", "name": "Hurst"},
    {"@type": "City", "name": "Keller"},
    {"@type": "City", "name": "Flower Mound"},
    {"@type": "City", "name": "Coppell"},
    {"@type": "City", "name": "Irving"},
    {"@type": "City", "name": "Fort Worth"}
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Locksmith Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Emergency Lockout Service",
          "description": "Rapid, damage-minimized entry for homes, vehicles, and businesses, day or night.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Car Key Replacement",
          "description": "All makes and models. Key cutting, transponder programming, and fob replacement on the spot.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Rekeying & Master Key Systems",
          "description": "Change access without replacing hardware; set key hierarchies for multi-door properties.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "High-Security Lock Installation",
          "description": "Pick- and bump-resistant cylinders and hardware for maximum protection.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Lock Installation & Repair",
          "description": "Deadbolts, levers, strikes, and door hardware installed or fixed to code.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Residential Locksmith Services",
          "description": "Protect your home with expert lock installation, rekeying, and emergency services.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Commercial Locksmith Services",
          "description": "Comprehensive security solutions for businesses, including access control and master key systems.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Smart Lock Installation",
          "description": "Upgrade to smart locks with keypad, Bluetooth, or Wi-Fi access.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Vehicle Rekeying & Lock Change",
          "description": "Our expert technicians will rekey or replace your vehicle locks.",
          "provider": {"@type": "Locksmith", "name": "Hi-Tech Key Solutions"}
        }
      }
    ]
  }
}
</script>
<!-- End Services Schema -->



<?php $phone = hitech_phone(); $phone_raw = hitech_phone_raw(); ?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-content">
        <p class="page-breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home','hitech'); ?></a> <span>›</span> <?php _e('Services','hitech'); ?></p>
        <h1 class="page-hero-title"><?php _e('Our Locksmith Services','hitech'); ?></h1>
        <p class="page-hero-sub"><?php _e('Fast, professional, and available 24/7 across Grapevine and Surrounding Areas and surrounding North Texas cities.','hitech'); ?></p>
    </div>
</section>

<section class="services-section" style="background:var(--white);">
    <div class="page-container">
        <div class="section-header center services-header">
            <div class="subheader-wrap" style="justify-content:center;"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65z"/></svg><span class="subh-text"><?php _e('Our Services','hitech'); ?></span></div>
            <h2 class="heading-h2"><?php _e('Unlocking Solutions Tailored to Your Needs','hitech'); ?></h2>
            <p class="section-p center"><?php _e('From emergency lockouts to rekeying and car key replacements, Hi-Tech Key Solutions provides expert locksmith services designed to keep you safe and secure.','hitech'); ?></p>
        </div>

        <div class="services-full-grid">
            <?php
            $all_services = [
                ['title'=>__('Emergency Lockouts','hitech'),           'desc'=>__('24/7 rapid, damage-free entry for homes, vehicles, and businesses — day or night.','hitech'),            'link'=>'/services/emergency-lockout/',       'icon'=>'<path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>'],
                ['title'=>__('Car Key Replacement','hitech'),           'desc'=>__('All makes and models. Transponder programming, key fobs, and smart keys — at your location.','hitech'),  'link'=>'/services/car-key-replacement/',     'icon'=>'<path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/>'],
                ['title'=>__('Rekeying & Master Key Systems','hitech'), 'desc'=>__('Change access without replacing hardware — set key hierarchies for multi-door properties.','hitech'),   'link'=>'/services/rekey-locks/',             'icon'=>'<path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>'],
                ['title'=>__('Lock Installation & Repair','hitech'),    'desc'=>__('Deadbolts, levers, knobs, and commercial hardware installed or repaired on all door types.','hitech'),   'link'=>'/services/lock-installation-repair/', 'icon'=>'<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/>'],
                ['title'=>__('High-Security Locks','hitech'),           'desc'=>__('Pick- and bump-resistant cylinders and hardware for maximum protection at home or business.','hitech'),  'link'=>'/services/high-security-locks/',     'icon'=>'<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>'],
                ['title'=>__('Residential Locksmith','hitech'),         'desc'=>__('Complete home locksmith services — lockouts, installations, rekeying, and security upgrades.','hitech'), 'link'=>'/services/residential-locksmith/',   'icon'=>'<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>'],
                ['title'=>__('Commercial Locksmith','hitech'),          'desc'=>__('Business security solutions — access control, master key systems, and commercial lockouts.','hitech'),    'link'=>'/services/commercial-locksmith/',    'icon'=>'<path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>'],
                ['title'=>__('Smart Lock Installation','hitech'),       'desc'=>__('Keypad, Bluetooth, and Wi-Fi smart locks installed and configured for homes and businesses.','hitech'),  'link'=>'/services/smart-lock-installation/', 'icon'=>'<path d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5zm-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-2zm-3-4h8v2H8z"/>'],
                ['title'=>__('Access Control Systems','hitech'),        'desc'=>__('Keypad, key card, biometric, and cloud-based access systems for complete property control.','hitech'),   'link'=>'/services/access-control/',          'icon'=>'<path d="M20 4H4c-1.11 0-2 .89-2 2v12c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>'],
            ];
            foreach ($all_services as $s): ?>
            <div class="service-box">
                <div class="service-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="var(--orange)"><?php echo $s['icon']; ?></svg></div>
                <h3 class="service-title"><?php echo esc_html($s['title']); ?></h3>
                <p class="service-desc"><?php echo esc_html($s['desc']); ?></p>
                <div class="service-btns">
                    <a href="<?php echo esc_url(home_url($s['link'])); ?>" class="primary-btn"><?php _e('Learn More','hitech'); ?></a>
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="ghost-btn"><?php _e('Call Now','hitech'); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-inner">
        <div>
            <h2 class="cta-heading"><?php _e('Need Locksmith Help Right Now?','hitech'); ?></h2>
            <p class="cta-text"><?php _e('We\'re available 24/7 for emergency and scheduled services across Grapevine and Surrounding Areas. Call or request a quote online.','hitech'); ?></p>
        </div>
        <div class="cta-buttons">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="white-btn"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.8472 15.3554L16.4306 13.3764C16.1892 13.2727 15.939 13.2333 15.6907 13.2562C15.2037 13.3636 14.9963 13.502L12.6441 15.4998C11.1984 14.7976 9.70595 13.3164 9.00376 11.8895L10.9519 9.57294C11.2229 9.05667 11.2445 8.81035C11.2264 8.31618 11.1291 8.08887L9.14438 3.65356C9.0157 3.35662 8.79444 3.10926 8.51362 2.94841C8.2328 2.78756 7.9075 2.72184 7.58626 2.76106C6.31592 2.92822 5.14986 3.55209 4.30588 4.51615C3.4619 5.48021 2.99771 6.71852 3.00001 7.99981C3.00001 15.4436 9.05626 21.4998 16.5 21.4998C17.7813 21.5021 19.0196 21.0379 19.9837 20.1939C20.9477 19.35 21.5716 18.1839 21.7388 16.9136C21.7781 16.5924 21.7125 16.2672 21.5518 15.9864C21.3911 15.7056 21.144 15.4843 20.8472 15.3554Z"/></svg><?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="white-btn"><?php _e('Request a Quote','hitech'); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
