<?php /* Template Name: Locations */ get_header(); ?>
<!-- Hi-Tech Key Solutions - Locations Page Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Locksmith Service Areas - DFW Texas",
  "description": "Hi-Tech Key Solutions serves all DFW cities with 24/7 locksmith services.",
  "url": "https://hitechkeysolutions.com/locations/",
  "numberOfItems": 11,
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Locksmith Grapevine TX", "url": "https://hitechkeysolutions.com/locations/grapevine/"},
    {"@type": "ListItem", "position": 2, "name": "Locksmith Southlake TX", "url": "https://hitechkeysolutions.com/locations/southlake/"},
    {"@type": "ListItem", "position": 3, "name": "Locksmith Colleyville TX", "url": "https://hitechkeysolutions.com/locations/colleyville/"},
    {"@type": "ListItem", "position": 4, "name": "Locksmith Euless TX", "url": "https://hitechkeysolutions.com/locations/euless/"},
    {"@type": "ListItem", "position": 5, "name": "Locksmith Bedford TX", "url": "https://hitechkeysolutions.com/locations/bedford/"},
    {"@type": "ListItem", "position": 6, "name": "Locksmith Hurst TX", "url": "https://hitechkeysolutions.com/locations/hurst/"},
    {"@type": "ListItem", "position": 7, "name": "Locksmith Keller TX", "url": "https://hitechkeysolutions.com/locations/keller/"},
    {"@type": "ListItem", "position": 8, "name": "Locksmith Flower Mound TX", "url": "https://hitechkeysolutions.com/locations/flower-mound/"},
    {"@type": "ListItem", "position": 9, "name": "Locksmith Coppell TX", "url": "https://hitechkeysolutions.com/locations/coppell/"},
    {"@type": "ListItem", "position": 10, "name": "Locksmith Irving TX", "url": "https://hitechkeysolutions.com/locations/irving/"},
    {"@type": "ListItem", "position": 11, "name": "Locksmith Fort Worth TX", "url": "https://hitechkeysolutions.com/locations/fort-worth/"}
  ],
  "provider": {
    "@type": "Locksmith",
    "name": "Hi-Tech Key Solutions",
    "telephone": "+18447131898",
    "url": "https://hitechkeysolutions.com"
  }
}
</script>
<!-- End Locations Schema -->



<?php $phone = hitech_phone(); $phone_raw = hitech_phone_raw(); $maps_url = hitech_maps_url(); ?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="page-hero-content">
        <p class="page-breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('Home','hitech'); ?></a> <span>›</span> <?php _e('Locations','hitech'); ?></p>
        <h1 class="page-hero-title"><?php _e('Areas We Serve','hitech'); ?></h1>
        <p class="page-hero-sub"><?php _e('Proudly serving the entire Grapevine and Surrounding Areas Metroplex and surrounding North Texas communities.','hitech'); ?></p>
    </div>
</section>

<section class="locations-section">
    <div class="page-container">
        <div class="section-header center">
            <div class="subheader-wrap" style="justify-content:center;"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg><span class="subh-text"><?php _e('Locations','hitech'); ?></span></div>
            <h2 class="heading-h2"><?php _e('Serving the Grapevine and Surrounding Areas','hitech'); ?></h2>
            <p class="section-p center"><?php _e('Our mobile locksmith team comes to you - no matter where in Grapevine and Surrounding Areas you are. Below are some of the cities we regularly serve.','hitech'); ?></p>
        </div>

        <div class="locations-grid">
            <?php
            $locations = [
                ['city'=>'Grapevine',    'slug'=>'locksmith-grapevine',    'desc'=>'Our primary service area. Fast 24/7 locksmith response throughout Grapevine TX.'],
                ['city'=>'Southlake',    'slug'=>'locksmith-southlake',    'desc'=>'Serving Southlake Town Square and all Southlake neighborhoods 24/7.'],
                ['city'=>'Colleyville',  'slug'=>'locksmith-colleyville',  'desc'=>'Professional locksmith services throughout Colleyville TX.'],
                ['city'=>'Keller',       'slug'=>'locksmith-keller',       'desc'=>'Serving Keller Town Center and all Keller communities with 24/7 locksmith service.'],
                ['city'=>'Flower Mound', 'slug'=>'locksmith-flower-mound', 'desc'=>'Fast locksmith response throughout Flower Mound TX.'],
                ['city'=>'Bedford',      'slug'=>'locksmith-bedford',      'desc'=>'24/7 emergency locksmith service for Bedford homes, cars & businesses.'],
                ['city'=>'Hurst',        'slug'=>'locksmith-hurst',        'desc'=>'Professional locksmith services near North East Mall and throughout Hurst TX.'],
                ['city'=>'Euless',       'slug'=>'locksmith-euless',       'desc'=>'24/7 locksmith service for Euless homes, cars, and businesses.'],
                ['city'=>'Coppell',      'slug'=>'locksmith-coppell',      'desc'=>'Trusted locksmith services throughout Coppell TX.'],
                ['city'=>'Irving',       'slug'=>'locksmith-irving',       'desc'=>'Serving Las Colinas, Valley Ranch and all Irving TX neighborhoods 24/7.'],
            ];
            foreach ($locations as $loc):
                $page_url = esc_url(home_url('/locations/' . $loc['slug'] . '/'));
            ?>
            <div class="location-card" style="opacity:1!important;visibility:visible!important;display:flex;flex-direction:column;justify-content:space-between;">
                <div>
                    <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <h3 class="location-city" style="margin:0;"><?php echo esc_html($loc['city']); ?>, TX</h3>
                    </div>
                    <p class="location-desc" style="color:var(--text-light);font-size:15px;line-height:1.6;margin-bottom:20px;"><?php echo esc_html($loc['desc']); ?></p>
                </div>
                <a href="<?php echo $page_url; ?>" style="display:inline-block;background:var(--orange);color:#fff;padding:11px 24px;border-radius:6px;font-weight:600;font-size:14px;text-decoration:none;text-align:center;transition:opacity .2s;">Learn More &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Map Section -->
<section style="padding:0 40px 80px;">
    <div style="max-width:1280px;margin:0 auto;">
        <div style="height:480px;border-radius:12px;overflow:hidden;box-shadow:0 8px 40px rgba(0,0,0,0.18);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229954.5321989975!2d-96.8963620551417!3d32.82084512629609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9b7c4f41cd09%3A0xa0bdf89c1685d3e0!2sHi-Tech%20Key%20Solutions!5e1!3m2!1sen!2sus!4v1733561085715!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="<?php _e('Grapevine Service Area Map','hitech'); ?>">
            </iframe>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="cta-inner">
        <div>
            <h2 class="cta-heading"><?php _e('Don\'t See Your City? We Can Still Help!','hitech'); ?></h2>
            <p class="cta-text"><?php _e('Our service area extends throughout the Grapevine and Surrounding Areas. Give us a call and we\'ll let you know if we can get to you.','hitech'); ?></p>
        </div>
        <div class="cta-buttons">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="white-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.8472 15.3554L16.4306 13.3764C16.1892 13.2727 15.6907 13.2562C15.2037 13.3636 14.9963 13.502L12.6441 15.4998C11.1984 14.7976 9.70595 13.3164 9.00376 11.8895L10.9519 9.57294C11.2445 8.81035 11.2264 8.31618 11.1291 8.08887L9.14438 3.65356C9.0157 3.35662 8.51362 2.94841C7.58626 2.76106C6.31592 2.92822 5.14986 3.55209 4.30588 4.51615C3.4619 5.48021 3.00001 7.99981C3.00001 15.4436 9.05626 21.4998 16.5 21.4998C17.7813 21.5021 19.9837 20.1939C20.9477 19.35 21.7388 16.9136C21.7781 16.5924 21.5518 15.9864C21.3911 15.7056 20.8472 15.3554Z"/></svg>
                <?php echo esc_html($phone); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
