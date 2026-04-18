<?php /* Template Name: Contact Us */ get_header(); ?>
<!-- Hi-Tech Key Solutions - Contact Page Schema -->
<?php $contact_schema_phone = esc_js( hitech_phone() ); ?>
<script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Hi-Tech Key Solutions - 24/7 Locksmith Grapevine TX",
    "url": "https://hitechkeysolutions.com/contact-us/",
    "description": "Contact Hi-Tech Key Solutions for 24/7 locksmith service in Grapevine TX and DFW. <?php echo $contact_schema_phone; ?> for emergency lockouts, car key replacement, and all locksmith needs."
  },
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Hi-Tech Key Solutions",
    "@id": "https://hitechkeysolutions.com/#localbusiness",
    "url": "https://hitechkeysolutions.com",
    "telephone": "+18447131898",
    "email": "Hitechkeysolutions@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Grapevine",
      "addressRegion": "TX",
      "addressCountry": "US"
    },
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
    }
  }
]
</script>
<!-- End Contact Schema -->



<?php $phone = hitech_phone(); $phone_raw = hitech_phone_raw(); $email = get_theme_mod('hitech_email','Hitechkeysolutions@gmail.com'); $maps_url = hitech_maps_url(); ?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-content">
        <p class="page-breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home','hitech'); ?></a> <span>›</span> <?php _e('Contact Us','hitech'); ?></p>
        <h1 class="page-hero-title"><?php _e('Contact Hi-Tech Key Solutions','hitech'); ?></h1>
        <p class="page-hero-sub"><?php _e("Whether you're locked out or need a quick quote, we're here to help-call, text, or drop us a message anytime!",'hitech'); ?></p>
    </div>
</section>

<!-- Quick contact info cards -->
<section style="background:var(--light);padding:60px 40px;">
    <div class="page-container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;max-width:1280px;margin:0 auto;">
            <div style="background:var(--white);border-radius:12px;padding:32px;text-align:center;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                <div style="width:56px;height:56px;background:rgba(251,116,60,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="var(--orange)"><path d="M20.8472 15.3554L16.4306 13.3764C16.1892 13.2727 15.6907 13.2562C15.2037 13.3636 14.9963 13.502L12.6441 15.4998C11.1984 14.7976 9.70595 13.3164 9.00376 11.8895L10.9519 9.57294C11.2445 8.81035 11.2264 8.31618 11.1291 8.08887L9.14438 3.65356C9.0157 3.35662 8.51362 2.94841C8.2328 2.78756 7.58626 2.76106C6.31592 2.92822 5.14986 3.55209 4.30588 4.51615C3.4619 5.48021 3.00001 7.99981C3.00001 15.4436 9.05626 21.4998 16.5 21.4998C17.7813 21.5021 19.9837 20.1939C20.9477 19.35 21.7388 16.9136C21.7781 16.5924 21.5518 15.9864C21.3911 15.7056 20.8472 15.3554Z"/></svg>
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;"><?php _e('Call or Text','hitech'); ?></h3>
                <p style="font-size:14px;color:var(--text-light);margin-bottom:12px;"><?php _e('Available 24/7','hitech'); ?></p>
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="font-size:18px;font-weight:700;color:var(--orange);"><?php echo esc_html($phone); ?></a>
            </div>
            <div style="background:var(--white);border-radius:12px;padding:32px;text-align:center;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                <div style="width:56px;height:56px;background:rgba(251,116,60,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;"><?php _e('Email Us','hitech'); ?></h3>
                <p style="font-size:14px;color:var(--text-light);margin-bottom:12px;"><?php _e('We respond promptly','hitech'); ?></p>
                <a href="mailto:<?php echo esc_attr($email); ?>" style="font-size:14px;font-weight:600;color:var(--orange);word-break:break-all;"><?php echo esc_html($email); ?></a>
            </div>
            <div style="background:var(--white);border-radius:12px;padding:32px;text-align:center;box-shadow:0 4px 24px rgba(0,0,0,0.08);">
                <div style="width:56px;height:56px;background:rgba(251,116,60,0.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:8px;"><?php _e('Service Area','hitech'); ?></h3>
                <p style="font-size:14px;color:var(--text-light);margin-bottom:12px;"><?php _e('Grapevine and Surrounding Areas','hitech'); ?></p>
                <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener" style="font-size:14px;font-weight:600;color:var(--orange);"><?php _e('View on Maps','hitech'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Map + Form -->
<section class="contact-section" style="padding-top:60px;">
    <div class="page-container">
        <div class="contact-grid">
            <div class="map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229954.5321989975!2d-96.8963620551417!3d32.82084512629609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9b7c4f41cd09%3A0xa0bdf89c1685d3e0!2sHi-Tech%20Key%20Solutions!5e1!3m2!1sen!2sus!4v1733561085715!5m2!1sen!2sus"
                    title="Hi-Tech Key Solutions on Google Maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php hitech_contact_form(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
