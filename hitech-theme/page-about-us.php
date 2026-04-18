<?php /* Template Name: About Us */ get_header(); ?>
<!-- Hi-Tech Key Solutions - About Page Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "About Hi-Tech Key Solutions - Grapevine TX Locksmith",
  "url": "https://hitechkeysolutions.com/about-us/",
  "description": "Hi-Tech Key Solutions is a licensed, insured locksmith company serving Grapevine TX and all DFW cities. With over 25 years of experience, we provide fast, professional locksmith services 24/7.",
  "mainEntity": {
    "@type": "Locksmith",
    "name": "Hi-Tech Key Solutions",
    "telephone": "+18447131898",
    "url": "https://hitechkeysolutions.com",
    "description": "Hi-Tech Key Solutions is Grapevine's trusted 24/7 locksmith serving DFW.",
    "foundingDate": "1999",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Grapevine",
      "addressRegion": "TX",
      "addressCountry": "US"
    },
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
    ]
  }
}
</script>
<!-- End About Schema -->



<?php $phone = hitech_phone(); $phone_raw = hitech_phone_raw(); ?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-content">
        <p class="page-breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home','hitech'); ?></a> <span>›</span> <?php _e('About Us','hitech'); ?></p>
        <h1 class="page-hero-title"><?php _e('About Hi-Tech Key Solutions','hitech'); ?></h1>
        <p class="page-hero-sub"><?php _e('25+ years of trusted locksmith service across Grapevine and Surrounding Areas.','hitech'); ?></p>
    </div>
</section>

<section class="about-section">
    <div class="page-container">
        <div class="about-grid">
            <div class="about-img-wrap">
                <img src="<?php echo esc_url(HITECH_URI.'/assets/images/about.jpg'); ?>" alt="Hi-Tech Key Solutions Team" loading="lazy"/>
            </div>
            <div>
                <div class="subheader-wrap"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg><span class="subh-text"><?php _e('About Us','hitech'); ?></span></div>
                <h2 class="about-heading"><?php _e('Your Security Is Our Priority','hitech'); ?></h2>
                <p class="about-para"><?php _e('At Hi-Tech Key Solutions, your safety comes first. Locally owned, insured, and trusted for more than 25 years, we serve the Grapevine and Surrounding Areas with responsive, professional locksmith work backed by honest pricing and dependable craftsmanship.','hitech'); ?></p>
                <p class="about-para"><?php _e("Our certified technicians provide transparent, efficient, and tailored solutions. Whether you are locked out, need a car key replacement, want to rekey after a move, or need a security upgrade with high-security locks, we are ready 24/7 to ensure you always feel safe and protected.", 'hitech'); ?></p>
                <p class="about-para"><?php _e('We believe security is more than just locks and keys-it\'s about peace of mind. Based in the heart of Grapevine and Surrounding Areas, we\'ve built our reputation on fast, reliable, and tailored locksmith services for homes, vehicles, and businesses.','hitech'); ?></p>
                <div class="about-btns">
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn" style="margin-top:16px;"><?php echo hitech_phone_svg(); ?><?php echo esc_html($phone); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="counter-section">
    <div class="counter-grid">
        <div class="counter-left">
            <p class="counter-label"><?php _e('Our Track Record','hitech'); ?></p>
            <h2 class="counter-heading"><?php _e('Proven experience you can trust in every situation.','hitech'); ?></h2>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="phone-btn"><?php echo hitech_phone_svg(); ?><?php echo esc_html($phone); ?></a>
        </div>
        <div class="counter-right">
            <div class="counter-stats">
                <div class="stat-box"><div class="stat-number"><span class="counterup" data-target="25">25</span><span class="stat-accent">+</span></div><div class="stat-label"><?php _e('Years of Experience','hitech'); ?></div></div>
                <div class="stat-box"><div class="stat-number"><span class="counterup" data-target="99">99</span><span class="stat-accent">%</span></div><div class="stat-label"><?php _e('Customer Satisfaction','hitech'); ?></div></div>
                <div class="stat-box"><div class="stat-number"><span class="counterup" data-target="10000">10000</span><span class="stat-accent">+</span></div><div class="stat-label"><?php _e('Locks Serviced','hitech'); ?></div></div>
                <div class="stat-box"><div class="stat-number">24<span class="stat-accent">/7</span></div><div class="stat-label"><?php _e('Emergency Availability','hitech'); ?></div></div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section">
    <div class="page-container">
        <div class="section-header center" style="margin-bottom:52px;">
            <div class="subheader-wrap" style="justify-content:center;"><svg width="18" height="18" viewBox="0 0 24 24" fill="var(--orange)"><path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65z"/></svg><span class="subh-text"><?php _e('Why Choose Us','hitech'); ?></span></div>
            <h2 class="heading-h2"><?php _e('Top 3 Benefits of Choosing Us','hitech'); ?></h2>
        </div>
        <div class="benefits-grid">
            <div>
                <div class="checklist">
                    <?php foreach ([['Fast & Reliable Service',__("Immediate response, 24/7 availability-because emergencies don't wait.",'hitech')],['Wide Brand Coverage',__('Service for all major vehicle and lock brands.','hitech')],['Expert Technicians',__('Certified professionals with the skills to handle any locksmith challenge.','hitech')]] as $b): ?>
                    <div class="check-item">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="16" fill="var(--orange)"/><path d="M22 11L13.5 21L10 17" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <div><h3 class="check-title"><?php echo esc_html($b[0]); ?></h3><p class="check-text"><?php echo esc_html($b[1]); ?></p></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="benefits-img">
                <img src="<?php echo esc_url(HITECH_URI.'/assets/images/benefit.jpg'); ?>" alt="Locksmith benefits" loading="lazy"/>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
