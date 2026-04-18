<?php
/**
 * Template Name: Location City Page
 */
get_header();

// Get city name from page title
$city = get_the_title();
$city = preg_replace('/Locksmith\s+/i', '', $city);
$city = preg_replace('/ TX$/i', '', $city); // strip trailing TX
$city = trim($city);
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();
$maps_url  = hitech_maps_url();
?>

<!-- Hero -->
<section class="page-hero" style="background:linear-gradient(135deg,#0a0a0a 60%,#1a0a00 100%);padding:100px 40px 80px;text-align:center;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url(<?php echo esc_url( HITECH_URI . '/assets/images/hero-bg.jpg' ); ?>) center/cover no-repeat;opacity:.18;z-index:0;"></div>
    <div style="position:relative;z-index:1;max-width:800px;margin:0 auto;">
        <p style="color:var(--orange);font-size:13px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;">📍 <?php echo esc_html($city); ?>, TX</p>
        <h1 style="color:#fff;font-size:clamp(2rem,5vw,3.2rem);font-weight:800;line-height:1.15;margin-bottom:20px;">
            Locksmith <?php echo esc_html($city); ?> TX<br>
            <span style="color:var(--orange);">Available 24/7 — Fast Response</span>
        </h1>
        <p style="color:rgba(255,255,255,.75);font-size:1.1rem;max-width:600px;margin:0 auto 32px;">Hi-Tech Key Solutions is <?php echo esc_html($city); ?>'s trusted locksmith. Licensed, insured, and on call around the clock for emergency lockouts, car key replacement, rekeying, and more.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:var(--orange);color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;">📞 Call <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;border:2px solid rgba(255,255,255,.3);">Request a Quote</a>
        </div>
    </div>
</section>

<!-- Trust Bar -->
<?php get_template_part( 'template-parts/trust-bar', null, array( 'city' => $city ) ); ?>

<!-- Services Section -->
<section style="padding:80px 40px;background:#fff;">
    <div style="max-width:1200px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:56px;">
            <p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:12px;">🔑 Our Services</p>
            <h2 style="font-size:clamp(1.6rem,3vw,2.4rem);font-weight:800;color:#121212;margin-bottom:16px;">Locksmith Services in <?php echo esc_html($city); ?> TX</h2>
            <p style="color:#666;max-width:600px;margin:0 auto;font-size:1rem;">From emergency lockouts to high-security upgrades, Hi-Tech Key Solutions handles every lock and key need in <?php echo esc_html($city); ?> TX.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:32px;">

            <?php
            $services = [
                [
                    'icon' => '🚨',
                    'title' => 'Emergency Lockout Service',
                    'link' => '/services/emergency-lockout/',
                    'body' => 'Getting locked out in '.$city.' is one of the most stressful experiences — especially late at night or in extreme Texas heat. Hi-Tech Key Solutions responds to emergency lockouts throughout '.$city.' TX typically within 15–30 minutes. Our licensed technicians use professional tools to open residential doors, commercial entries, and vehicle locks without causing damage. Whether you\'re locked out of your home near '.$city.' Town Center, stranded in a parking lot, or locked out of your office, we\'re one call away. We never charge extra for nights, weekends, or holidays.'
                ],
                [
                    'icon' => '🚗',
                    'title' => 'Car Key Replacement',
                    'link' => '/services/car-key-replacement/',
                    'body' => 'Lost or broken car keys in '.$city.' TX? Hi-Tech Key Solutions comes directly to your location — no towing required. We cut and program replacement car keys for all makes and models including Ford, Toyota, Honda, Chevrolet, BMW, Mercedes-Benz, and more. Our mobile units carry the latest key cutting and transponder programming equipment, so most '.$city.' customers are back on the road within 30 minutes. We provide transponder key programming, smart key replacement, key fob programming, and duplicate key cutting at a fraction of the dealership cost.'
                ],
                [
                    'icon' => '🔑',
                    'title' => 'Rekey Locks',
                    'link' => '/services/rekey-locks/',
                    'body' => 'If you\'ve recently moved into a new home in '.$city.' TX, ended a tenancy, or lost a key — rekeying is the smartest security move you can make. Hi-Tech Key Solutions rekeyes locks throughout '.$city.' quickly and affordably. Rekeying changes the internal pins of your existing lock so only new keys will work, rendering all old copies useless. It\'s faster and cheaper than full lock replacement with the same level of security. We can also rekey all your '.$city.' home\'s exterior locks to a single master key for ultimate convenience.'
                ],
                [
                    'icon' => '🛡️',
                    'title' => 'High-Security Locks',
                    'link' => '/services/high-security-locks/',
                    'body' => 'Standard locks provide minimal protection against determined burglars. Hi-Tech Key Solutions installs high-security lock systems throughout '.$city.' TX that are certified pick-resistant, bump-resistant, and drill-resistant. We carry premium brands including Medeco, Mul-T-Lock, and Schlage Grade 1 deadbolts — the same hardware used to protect banks and government facilities. '.$city.' homeowners and business owners trust us to assess their current vulnerabilities and recommend the right high-security solutions for their specific property and budget. Free security assessment available.'
                ],
                [
                    'icon' => '🏠',
                    'title' => 'Residential Locksmith',
                    'link' => '/services/residential-locksmith/',
                    'body' => 'Hi-Tech Key Solutions is the preferred residential locksmith for homeowners throughout '.$city.' TX. We handle everything from emergency home lockouts and new deadbolt installation to smart lock upgrades and complete home security assessments. Our '.$city.' residential locksmith services include lock installation and repair, rekeying after a move, sliding door lock reinforcement, mailbox lock replacement, and high-security cylinder upgrades. All our technicians are background-checked, licensed, and insured — so you can trust who you\'re letting into your '.$city.' home.'
                ],
                [
                    'icon' => '🏢',
                    'title' => 'Commercial Locksmith',
                    'link' => '/services/commercial-locksmith/',
                    'body' => 'Business security in '.$city.' TX requires more than a standard lock. Hi-Tech Key Solutions provides comprehensive commercial locksmith services to offices, retail stores, restaurants, medical practices, and warehouses throughout '.$city.' and the surrounding DFW area. We install heavy-duty commercial-grade locks, design and implement master key systems, service panic bars and exit devices, and respond to emergency business lockouts 24/7. We work around your schedule to minimize business disruption, and we can rekey your entire '.$city.' facility on employee termination for immediate security.'
                ],
                [
                    'icon' => '📲',
                    'title' => 'Access Control Systems',
                    'link' => '/services/access-control/',
                    'body' => 'Modern '.$city.' homes and businesses are upgrading from traditional keys to smart access control systems — and Hi-Tech Key Solutions installs them all. We design and install keypad entry systems, key card and fob access, biometric fingerprint readers, app-controlled smart locks, video intercom systems, and full multi-door cloud-based access control for commercial properties in '.$city.' TX. Access control eliminates the risk of lost or copied keys, provides a full audit trail of who enters and when, and lets you grant or revoke access instantly from your smartphone — ideal for '.$city.' businesses managing multiple employees or locations.'
                ],
            ];
            foreach($services as $svc): ?>

            <div style="background:#fff;border:1px solid #eee;border-radius:12px;padding:32px;box-shadow:0 2px 20px rgba(0,0,0,.06);display:flex;flex-direction:column;gap:16px;transition:box-shadow .2s;">
                <div style="display:flex;align-items:center;gap:14px;margin-bottom:4px;">
                    <span style="font-size:2rem;"><?php echo $svc['icon']; ?></span>
                    <h3 style="font-size:1.15rem;font-weight:800;color:#121212;margin:0;"><?php echo esc_html($svc['title']); ?></h3>
                </div>
                <p style="color:#555;font-size:.95rem;line-height:1.75;margin:0;"><?php echo esc_html($svc['body']); ?></p>
                <a href="<?php echo esc_url(home_url($svc['link'])); ?>" style="margin-top:auto;display:inline-flex;align-items:center;gap:6px;color:var(--orange);font-weight:700;font-size:.9rem;text-decoration:none;">Learn More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Why Us Strip -->
<section style="background:#121212;padding:70px 40px;">
    <div style="max-width:1100px;margin:0 auto;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
        <div>
            <p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;">WHY CHOOSE US</p>
            <h2 style="color:#fff;font-size:clamp(1.5rem,3vw,2.2rem);font-weight:800;margin-bottom:20px;">Why <?php echo esc_html($city); ?> Residents Trust Hi-Tech Key Solutions</h2>
            <p style="color:rgba(255,255,255,.65);line-height:1.75;margin-bottom:28px;">With over 25 years serving <?php echo esc_html($city); ?> and the DFW area, we've built our reputation one lockout at a time. Every technician is background-checked, licensed, and carries full insurance — so you always know who's at your door.</p>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="display:inline-block;background:var(--orange);color:#fff;padding:14px 28px;border-radius:8px;font-weight:700;text-decoration:none;">Call <?php echo esc_html($phone); ?></a>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
            <?php foreach([
                ['🏆','25+ Years Experience','Serving '.$city.' & DFW since 1999'],
                ['⚡','15-30 Min Response','Fastest in '.$city],
                ['✅','Licensed & Insured','Fully certified technicians'],
                ['⭐','207 Reviews','4.9-star Google rating'],
            ] as $w): ?>
            <div style="background:rgba(255,255,255,.07);border-radius:10px;padding:20px;">
                <div style="font-size:1.6rem;margin-bottom:8px;"><?php echo $w[0]; ?></div>
                <div style="color:#fff;font-weight:700;font-size:.9rem;margin-bottom:4px;"><?php echo $w[1]; ?></div>
                <div style="color:rgba(255,255,255,.5);font-size:.8rem;"><?php echo $w[2]; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background:var(--orange);padding:70px 40px;text-align:center;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="color:#fff;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:16px;">Locked Out in <?php echo esc_html($city); ?>? We're On Our Way.</h2>
        <p style="color:rgba(255,255,255,.85);font-size:1.05rem;margin-bottom:32px;">Call now for immediate 24/7 locksmith service anywhere in <?php echo esc_html($city); ?>, TX. No extra charge for nights, weekends, or holidays.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:#fff;color:var(--orange);padding:14px 36px;border-radius:8px;font-weight:800;font-size:1.05rem;text-decoration:none;">📞 <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 36px;border-radius:8px;font-weight:700;font-size:1.05rem;text-decoration:none;border:2px solid rgba(255,255,255,.6);">Request a Quote</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
