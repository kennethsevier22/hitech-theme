<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<!-- Hi-Tech Key Solutions - Local Business Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Locksmith",
  "name": "Hi-Tech Key Solutions",
  "image": "https://orchid-wren-729878.hostingersite.com/wp-content/uploads/2026/04/Hi-Tech-Key-2.jpg",
  "url": "https://hitechkeysolutions.com",
  "telephone": "+18447131898",
  "email": "Hitechkeysolutions@gmail.com",
  "description": "Hi-Tech Key Solutions is Grapevine's trusted 24/7 locksmith serving DFW — emergency lockouts, car key replacement, rekeying and high-security lock installation.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Grapevine",
    "addressRegion": "TX",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 32.9343,
    "longitude": -97.0781
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
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "00:00",
    "closes": "23:59"
  },
  "priceRange": "$$",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "207",
    "bestRating": "5"
  },
  "sameAs": [
    "https://www.facebook.com/hitechkeysolutions",
    "https://www.instagram.com/hitechkeysolutions/",
    "https://g.page/r/CeDThRac-L2gEBM/review"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Locksmith Services",
    "itemListElement": [
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Emergency Lockout Service"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Car Key Replacement"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Rekey Locks"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "High Security Lock Installation"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Lock Installation and Repair"}},
      {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Residential Locksmith Services"}}
    ]
  }
}
</script>
<!-- End Schema -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();
$maps_url  = hitech_maps_url();
$facebook  = esc_url( get_theme_mod('hitech_facebook_url','#') );
$instagram = esc_url( get_theme_mod('hitech_instagram_url','#') );
?>
<div class="top-banner">
    <div class="banner-left">
        <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener" aria-label="Facebook">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
    </div>
    <div class="banner-right">
        <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" class="banner-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Grapevine and Surrounding Areas
        </a>
        <a href="tel:<?php echo esc_attr( hitech_phone_raw() ); ?>" class="banner-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
            <?php echo esc_html( hitech_phone() ); ?>
        </a>
    </div>
</div>
<header class="site-header">
    <nav class="navbar">
        <div class="nav-logo">
            <?php if ( has_custom_logo() ) { the_custom_logo(); } else { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(HITECH_URI.'/assets/images/logo.svg'); ?>" alt="Hi-Tech Key Solutions" height="52" />
                </a>
            <?php } ?>
        </div>
        <div class="nav-menu">
            <?php
            $nav_items = array(
                home_url('/')            => 'Home',
                home_url('/about-us/')   => 'About Us',
                home_url('/services/')   => 'Services',
                home_url('/locations/')  => 'Locations',
                home_url('/contact-us/') => 'Contact Us',
            );
            $current = trailingslashit(home_url(add_query_arg(null, null)));
            foreach ( $nav_items as $url => $label ) {
                $active = ( trailingslashit($url) === $current ) ? ' active' : '';
                echo '<a href="' . esc_url($url) . '" class="nav-link' . $active . '">' . esc_html($label) . '</a>';
            }
            ?>
        </div>
        <div class="nav-cta">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="primary-btn">Request a Quote</a>
        </div>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </nav>
    <div class="mobile-nav" id="mobile-nav">
        <?php foreach ( $nav_items as $url => $label ) {
            echo '<a href="' . esc_url($url) . '" class="nav-link">' . esc_html($label) . '</a>';
        } ?>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="primary-btn">Request a Quote</a>
    </div>
</header>
