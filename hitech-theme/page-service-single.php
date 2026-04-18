<?php
/**
 * Template Name: Service Single Page
 */
get_header();

$slug      = basename(untrailingslashit(get_permalink()));
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();

$services = array(
  "emergency-lockouts" => array(
    "title"   => "Emergency Lockout Service",
    "sub"     => "24/7 Emergency Response — Grapevine & DFW",
    "icon"    => "🚨",
    "intro"   => "Being locked out in Grapevine TX is stressful. Hi-Tech Key Solutions responds 24/7 throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all DFW — typically within 15-30 minutes. Licensed technicians open residential, commercial, and vehicle locks without damage.",
    "cards"   => array(
      array("🏠","Home Lockout","Locked out of your Grapevine or DFW home? We open all residential door locks without damaging your door, frame, or lock hardware. Available 24/7 with no extra charge for nights or weekends."),
      array("🚗","Car Lockout","Keys locked in your vehicle anywhere in DFW? We safely unlock all makes and models using professional automotive entry tools — no scratches, no paint damage."),
      array("🏢","Business Lockout","Every minute your Grapevine or DFW business is locked out costs money. We prioritize commercial lockouts and respond fast to offices, retail stores, and commercial properties around the clock."),
      array("🔑","Broken Key Extraction","Key snapped in your lock? We extract broken keys from any lock cylinder without damaging the lock and cut a new key on-site in Grapevine and throughout DFW."),
      array("🌙","After-Hours Emergency","Hi-Tech Key Solutions never charges extra for nights, weekends, or holidays. Our emergency team is fully staffed and operational 24 hours a day, 365 days a year."),
    ),
    "why_us"  => "When you are locked out, every minute matters. Hi-Tech Key Solutions has served Grapevine and DFW for over 25 years with fast response, honest pricing, and zero-damage entry. All technicians are background-checked, licensed, and fully insured.",
    "faq"     => array(
      array("How fast can you get to me?","We typically arrive within 15-30 minutes anywhere in Grapevine, Southlake, Colleyville, Euless, Bedford, Hurst, Keller, Flower Mound, Coppell, or Irving."),
      array("Do you charge extra for nights and weekends?","Never. Our price is the same at 3 AM on a Sunday as noon on a Tuesday."),
      array("Will you damage my lock or door?","No. Our professional entry tools are designed to open locks without damage. We have opened thousands of locks in DFW without a single damage claim."),
      array("Do you service all car makes and models?","Yes. We service all domestic and import vehicles including Ford, Chevy, Toyota, Honda, BMW, Mercedes, Jeep, and all others."),
    ),
  ),
  "rekeying-master-key-systems" => array(
    "title"   => "Rekey Locks & Master Key Systems",
    "sub"     => "New Keys for Your Existing Locks — Fast, Affordable & Secure",
    "icon"    => "🔑",
    "intro"   => "Rekeying is one of the smartest security decisions you can make and costs significantly less than replacing locks with identical security results. Hi-Tech Key Solutions rekeyes locks throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all of DFW.",
    "cards"   => array(
      array("🏠","New Homeowner Rekeying","Moving into a new home in Grapevine or DFW? Rekeying immediately is the most important security step. You never know how many copies of your keys exist. We rekey all exterior locks in under an hour."),
      array("🗝️","Rekey to a Single Master Key","Juggling multiple keys for multiple doors? We rekey all your locks to one key — no more fumbling through a key ring. One of our most popular services throughout Grapevine and DFW."),
      array("🏢","Commercial and Rental Rekeying","Employee turnover and tenant changes create security vulnerabilities. We provide fast commercial rekeying throughout Grapevine and DFW to close the security gap immediately after any access change."),
      array("🔐","Master Key System Design","Need one key that opens everything and individual keys for specific doors? We design and implement custom master key hierarchies for homes, offices, and commercial facilities throughout DFW."),
      array("🚨","Emergency Rekey After Break-In","If your property has been broken into or your keys stolen, same-day emergency rekeying restores your security immediately. Available throughout Grapevine and DFW 24/7."),
    ),
    "why_us"  => "Rekeying is almost always faster and more affordable than replacing locks with the same security result. Hi-Tech Key Solutions has rekeyed thousands of homes and businesses throughout Grapevine and DFW. Our technicians carry key blanks for all major lock brands.",
    "faq"     => array(
      array("What is the difference between rekeying and replacing locks?","Rekeying changes the internal pins so existing keys no longer work. Lock replacement replaces the entire hardware. Rekeying is faster, cheaper, and provides the same security."),
      array("How long does rekeying take?","Most homes in Grapevine and DFW can be fully rekeyed in 45-90 minutes depending on the number of locks."),
      array("Can you rekey any brand of lock?","We rekey all major brands including Schlage, Kwikset, Baldwin, Medeco, Mul-T-Lock, and most others."),
      array("What if I want all my doors on one key?","Absolutely. We can rekey multiple locks to a single key in the same visit."),
    ),
  ),
  "car-key-replacement" => array(
    "title"   => "Car Key Replacement",
    "sub"     => "All Makes & Models — We Come to You — Save 50-70% vs. Dealer",
    "icon"    => "🚗",
    "intro"   => "Lost or broken car keys in Grapevine TX? Hi-Tech Key Solutions comes to your location — no towing required. We cut and program replacement keys for all makes and models at a fraction of dealership pricing, usually within 30 minutes of arrival.",
    "cards"   => array(
      array("💻","Transponder Key Programming","Most modern vehicles use transponder keys with an embedded chip that must be programmed to your specific car. We program transponder keys for all makes and models on-site throughout Grapevine and DFW."),
      array("📱","Smart Key and Proximity Key Replacement","Push-to-start vehicles require a smart key. Dealers often charge 400-600 dollars or more. We program smart keys and proximity fobs at significantly lower cost directly at your Grapevine or DFW location."),
      array("🔧","Key Fob Replacement and Programming","Lost or broken your remote key fob? We supply and program replacement fobs for all vehicles including lock, unlock, trunk release, panic button, and remote start functions."),
      array("✂️","Duplicate Car Key Cutting","Getting a spare key cut before you need one is the smartest thing any driver can do. We cut and program duplicate car keys for all vehicles while you wait in 20-30 minutes."),
      array("🚘","Vehicle Rekeying and Lock Change","Car broken into or bought a used vehicle? We rekey ignition cylinders, door lock cylinders, and glove box locks for all makes and models. Mobile service throughout Grapevine and DFW."),
    ),
    "why_us"  => "Hi-Tech Key Solutions has been replacing car keys throughout Grapevine and DFW for over 25 years. We save customers an average of 50-70% compared to dealership pricing, and we come to you. No towing, no waiting room.",
    "faq"     => array(
      array("Can you replace keys for any car?","Yes. We replace and program keys for all domestic and import makes and models including Ford, GM, Toyota, Honda, Nissan, BMW, Mercedes, Hyundai, Kia, Jeep, and all others."),
      array("Do I need to tow my car to you?","Never. We come to your location anywhere in Grapevine or DFW. Most jobs are completed on-site in 20-30 minutes."),
      array("How much does car key replacement cost?","Pricing varies by vehicle make, model, and key type. We always provide a firm price quote before starting any work."),
      array("Can you make a key if I have no existing key?","Yes. Even with zero keys, we can cut and program a new key using your VIN number and proof of ownership."),
    ),
  ),
  "lock-installation-repair" => array(
    "title"   => "Lock Installation & Repair",
    "sub"     => "All Lock Types for Grapevine & DFW Homes and Businesses",
    "icon"    => "🔧",
    "intro"   => "Whether you need a brand new deadbolt installed or a malfunctioning lock repaired, Hi-Tech Key Solutions handles every lock installation and repair job throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all of DFW.",
    "cards"   => array(
      array("🔒","Deadbolt Installation","We install ANSI Grade 1 deadbolts throughout Grapevine and DFW — the highest rated residential security standard. We carry Schlage, Kwikset, Baldwin, Medeco, and Mul-T-Lock in all finishes."),
      array("🚪","Knob and Lever Lock Installation","Interior and exterior door knobs and lever sets installed correctly throughout Grapevine and DFW. Proper fit, smooth operation, and correct latch alignment on every door."),
      array("🔧","Lock Repair","Sticky, loose, or difficult-to-operate locks are a security risk. We diagnose and repair all lock problems on-site including worn keyways, misaligned strikes, broken internals, and damaged cylinders."),
      array("🏢","Commercial Lock Installation","Commercial doors require heavy-duty Grade 1 hardware. We install commercial mortise locks, cylindrical locks, and exit devices throughout Grapevine and DFW. All installations meet ADA requirements."),
      array("🪟","Sliding Door and Window Locks","Sliding glass doors are among the most vulnerable entry points in any home. We install and repair sliding door security bars, pin locks, and blocking devices throughout Grapevine and DFW."),
    ),
    "why_us"  => "A properly installed lock is the foundation of any security system. Hi-Tech Key Solutions has installed and repaired thousands of locks throughout Grapevine and DFW over 25 years. Every installation is done right the first time.",
    "faq"     => array(
      array("How do I know if I need repair or replacement?","If the lock mechanism is damaged or low quality, replacement is better. If it is a fit or alignment issue, repair is usually sufficient and cheaper. We assess on-site."),
      array("What lock brands do you work with?","All major brands including Schlage, Kwikset, Baldwin, Medeco, Mul-T-Lock, Yale, and most commercial hardware brands."),
      array("Can you match my existing hardware finish?","Yes. We carry locks in all standard finishes including brushed nickel, polished brass, satin brass, matte black, and oil-rubbed bronze."),
      array("How long does a lock installation take?","A single deadbolt installation typically takes 30-60 minutes. Full home hardware replacement can be done in a half-day visit."),
    ),
  ),
  "high-security-locks" => array(
    "title"   => "High-Security Lock Installation",
    "sub"     => "Maximum Protection for Grapevine & DFW Homes and Businesses",
    "icon"    => "🛡️",
    "intro"   => "Standard residential locks provide minimal resistance to a determined burglar. Hi-Tech Key Solutions installs professional-grade high-security locks throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all DFW cities — pick-resistant, bump-resistant, and drill-resistant.",
    "cards"   => array(
      array("🏆","Medeco High-Security Locks","Medeco locks are the industry gold standard for residential and commercial security. Their patented technology makes them virtually impossible to pick, and hardened steel construction resists drilling. Keys cannot be duplicated without written authorization."),
      array("💪","Mul-T-Lock High-Security Deadbolts","Mul-T-Lock provides exceptionally high pick resistance with anti-drill hardened steel plates and anti-saw bolts. Popular choice for Grapevine homes and DFW businesses requiring maximum security."),
      array("🔒","Schlage Grade 1 Deadbolts","The Schlage Grade 1 deadbolt is the strongest residential lock available — rated by ANSI for the highest residential security level. A significant upgrade over builder-grade hardware found in most DFW homes."),
      array("🗝️","Restricted Keyway Systems","High-security locks with restricted keyways cannot be duplicated at a hardware store. Only authorized dealers can cut copies — giving you complete control over who has access to your property."),
      array("🚪","Door Frame and Strike Plate Reinforcement","The strongest deadbolt is only as good as the door frame it is mounted in. Most break-ins involve kicking the door. We install reinforced strike plates with 3-inch screws anchoring into wall studs throughout DFW."),
    ),
    "why_us"  => "Most DFW homeowners dramatically underestimate the vulnerability of their existing locks. A free security assessment from Hi-Tech Key Solutions will show you exactly where your property is vulnerable and the right upgrades for your budget.",
    "faq"     => array(
      array("How much more secure is a high-security lock?","A quality high-security lock can take hours to defeat by a professional — vs. under a minute for a standard lock. For most burglars that means they simply move on."),
      array("Do high-security locks cost a lot more?","Quality locks range from 150-400 dollars depending on brand. Given the protection they provide, most customers consider it excellent value."),
      array("Can I get a free security assessment?","Yes. Our licensed locksmiths will assess your Grapevine or DFW property and provide a no-obligation recommendation."),
      array("Do high-security locks look different from standard locks?","Most high-security locks are available in the same finishes as standard hardware so they blend seamlessly with your home."),
    ),
  ),
  "residential-locksmith" => array(
    "title"   => "Residential Locksmith Services",
    "sub"     => "Complete Home Lock & Security Services in Grapevine & DFW",
    "icon"    => "🏠",
    "intro"   => "Your home is your most important asset and your locks are your first line of defense. Hi-Tech Key Solutions provides complete residential locksmith services throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all DFW cities.",
    "cards"   => array(
      array("🚨","Emergency Home Lockout","Locked out of your Grapevine or DFW home? We respond 24/7 with no extra charge for nights or weekends. We open all residential door locks without damage to your door, frame, or hardware."),
      array("🔧","Lock Installation and Replacement","We install deadbolts, lever sets, knob locks, handlesets, and smart locks from Schlage, Kwikset, Baldwin, Medeco, and more throughout Grapevine and DFW."),
      array("🔩","Lock Repair","Sticky, stiff, or malfunctioning locks can leave your home vulnerable. Our residential lock repair service covers all lock problems including worn keyways, misaligned strikes, and damaged cylinders."),
      array("🗝️","Lock Rekeying","Just moved to a new home in Grapevine? Rekeying immediately is essential. We change internal pins so only your new keys work — at a fraction of the cost of new locks."),
      array("📱","Smart Lock Installation","We install and configure keypad, Bluetooth, Z-Wave, and Wi-Fi smart locks from Schlage, Kwikset, August, Yale, and other leading brands throughout Grapevine and DFW."),
    ),
    "why_us"  => "Hi-Tech Key Solutions has been the trusted residential locksmith for Grapevine and DFW homeowners for over 25 years. Every technician is background-checked, licensed, and fully insured. Our 4.9-star rating with 207 Google reviews speaks for itself.",
    "faq"     => array(
      array("Do I need to show ID for a home lockout?","Yes. For your security, we verify your identity and ownership or occupancy of the property before performing any home lockout service."),
      array("Should I rekey or replace my locks when I move?","Rekeying is almost always sufficient and significantly cheaper. Replace only if the locks are damaged or low-quality."),
      array("Can you install smart locks on any door?","Most standard doors accept smart locks with simple adapter plates. We assess your door during the visit and confirm compatibility before installation."),
      array("Do you work on all types of residential locks?","Yes — deadbolts, knob locks, lever sets, mortise locks, smart locks, padlocks, sliding door locks, and more."),
    ),
  ),
  "commercial-locksmith" => array(
    "title"   => "Commercial Locksmith Services",
    "sub"     => "Business Security Solutions for Grapevine & DFW Companies",
    "icon"    => "🏢",
    "intro"   => "Business security requires a different level of expertise than residential locksmith work. Hi-Tech Key Solutions provides comprehensive commercial locksmith services to businesses throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all of DFW.",
    "cards"   => array(
      array("🚨","Emergency Business Lockout","A business lockout costs money every minute. Hi-Tech Key Solutions prioritizes commercial lockouts and responds fast to get your Grapevine or DFW business back open — 24 hours a day, 7 days a week."),
      array("🔐","Master Key Systems","We design and implement custom master key hierarchies for Grapevine and DFW businesses of all sizes — from small offices to large commercial complexes. Our systems scale as your business grows."),
      array("🚪","Commercial Lock Installation","Commercial doors require heavy-duty Grade 1 hardware rated for high-traffic use. We install commercial mortise locks, cylindrical locks, and exit devices throughout Grapevine and DFW."),
      array("🚧","Panic Bar and Exit Device Installation","We install, service, and replace panic bars and exit devices from Von Duprin, Falcon, and other leading brands throughout DFW. We ensure your business meets all applicable code requirements."),
      array("🔑","Employee Key Management","We provide fast rekeying on employee termination, duplicate key cutting for new hires, and key tracking systems so you always know exactly who has access to your property."),
    ),
    "why_us"  => "Our commercial locksmith team is specifically trained in commercial hardware, access control, and master key system design. We have secured hundreds of Grapevine and DFW businesses across all industries and offer ongoing service agreements.",
    "faq"     => array(
      array("Do you service commercial doors of all types?","Yes — wood, metal, glass, hollow metal frames, storefront systems, roll-up doors, and all standard commercial door configurations."),
      array("Can you work after hours to avoid disrupting business?","Absolutely. We schedule commercial jobs around your hours and can work nights and weekends at no extra charge."),
      array("Do you offer service contracts for ongoing needs?","Yes. We offer commercial service agreements for businesses with regular rekeying, maintenance, or access management needs."),
      array("Are your technicians trained on commercial hardware?","Yes. Our commercial technicians receive specialized training on commercial-grade hardware, access control, and master key systems."),
    ),
  ),
  "smart-lock-installation" => array(
    "title"   => "Smart Lock Installation",
    "sub"     => "Keyless, App-Controlled Entry for Grapevine & DFW Homes and Businesses",
    "icon"    => "📱",
    "intro"   => "Smart locks are transforming home and business security throughout Grapevine and DFW. Hi-Tech Key Solutions installs, configures, and programs smart locks for all door types — giving you keyless convenience, smartphone control, and complete visibility into who enters your property and when.",
    "cards"   => array(
      array("🔢","Keypad Smart Locks","Keypad smart locks are the most popular upgrade for Grapevine homeowners — no phone required, just enter your code. We install Schlage Encode, Kwikset SmartCode, and Yale keypad deadbolts throughout DFW."),
      array("📡","WiFi and Z-Wave Smart Locks","WiFi and Z-Wave smart locks connect to your home network, letting you lock and unlock your Grapevine home from anywhere using your smartphone. Get real-time notifications every time the lock is used."),
      array("📲","Bluetooth Smart Locks","Bluetooth smart locks detect your phone as you approach and unlock automatically — true hands-free entry. We install and configure August and other leading Bluetooth smart lock systems throughout DFW."),
      array("🏢","Commercial Smart Locks","Smart lock technology is just as valuable for Grapevine and DFW businesses as for homeowners. Commercial smart locks provide PIN code access, remote management, complete access logs, and instant lockout capability."),
      array("🔗","Smart Home Integration","We configure smart lock integration with Amazon Alexa, Google Home, Apple HomeKit, Ring, SimpliSafe, and other platforms throughout Grapevine and DFW for seamless smart home operation."),
    ),
    "why_us"  => "Smart lock technology has become mainstream but proper installation still requires expertise. We do not just mount the hardware — we configure the app, set up user codes, test all functions, and walk you through the system before we leave.",
    "faq"     => array(
      array("Will a smart lock fit my existing door?","Most smart locks fit standard US door prep and work with existing deadbolt holes. We assess your door before recommending a system."),
      array("What if the battery dies — am I locked out?","All smart locks we install have a physical key override as backup. Most also have an external power terminal for emergency use."),
      array("Do smart locks work without WiFi?","Yes. Keypad and Bluetooth functions work offline. Remote access requires WiFi, but you can always use your PIN code or physical key."),
      array("Can I still use a regular key with a smart lock?","Yes. All smart locks we install include a physical key cylinder as backup so you are never dependent on technology alone."),
    ),
  ),
  "access-control" => array(
    "title"   => "Access Control Systems",
    "sub"     => "Smart Entry Solutions for Grapevine & DFW Homes and Businesses",
    "icon"    => "📲",
    "intro"   => "Traditional keys can be lost, copied without authorization, and provide no record of who entered your property or when. Access control systems solve all of these problems. Hi-Tech Key Solutions designs and installs professional access control systems throughout Grapevine, Southlake, Colleyville, Keller, Euless, Bedford, Hurst, Flower Mound, Coppell, Irving, and all of DFW.",
    "cards"   => array(
      array("🔢","Keypad Entry Systems","Keypad access control eliminates the need for physical keys entirely. Codes can be changed instantly when needed — no rekeying required. Set up temporary codes for contractors or guests and delete them when done."),
      array("💳","Key Card and Fob Access Control","Card reader and fob-based access control is the standard for offices throughout DFW. Lost cards or fobs are deactivated instantly in the system — no rekeying, no security gap."),
      array("👆","Biometric Access Control","Fingerprint readers provide the highest level of access security available. We install commercial-grade biometric access control for server rooms, executive offices, and other high-security areas throughout DFW."),
      array("☁️","Cloud-Based Access Control","Modern cloud-based platforms let you manage your entire property from any smartphone — add users, revoke access, view entry logs, and receive alerts in real time from anywhere in the world."),
      array("📹","Intercom and Video Access Systems","See and speak to visitors before granting access to your Grapevine or DFW property. We install video intercom systems, door phones, and video doorbell integrations for residential and commercial properties."),
    ),
    "why_us"  => "Access control is one of the most rapidly evolving areas of physical security, and Hi-Tech Key Solutions stays current with the latest technology. We start with a free consultation to understand your needs and recommend the right system for your budget.",
    "faq"     => array(
      array("What is the best access control system for a small business?","For most small Grapevine and DFW businesses, a keypad or key fob system with an audit trail is the ideal starting point — affordable, flexible, and easy to manage."),
      array("Can access control integrate with security cameras?","Yes. Most modern access control platforms integrate with IP camera systems to provide a complete security solution."),
      array("What happens if there is a power outage?","All systems we install include battery backup to ensure continued operation during power outages. Entry logs are preserved."),
      array("How long does installation take?","A single-door system can typically be installed in 2-4 hours. Multi-door commercial systems are scoped based on complexity."),
    ),
  ),
);

// Match slug — try exact, then strip trailing s, then fallback
$svc = isset($services[$slug]) ? $services[$slug] : null;
if (!$svc) {
    $alt = rtrim($slug,'s');
    $svc = isset($services[$alt]) ? $services[$alt] : null;
}
if (!$svc) {
    // Last resort fallback
    $svc = array(
        "title"  => get_the_title(),
        "sub"    => "Professional Locksmith Services — Grapevine & DFW — Available 24/7",
        "icon"   => "🔒",
        "intro"  => "Hi-Tech Key Solutions provides professional locksmith services throughout Grapevine and all DFW cities. Call 844-713-1898 for immediate service.",
        "cards"  => array(),
        "why_us" => "Over 25 years serving Grapevine and DFW. Licensed, insured, and background-checked technicians.",
        "faq"    => array(),
    );
}
?>

<section style="background:linear-gradient(135deg,#0a0a0a 60%,#1a0500 100%);padding:100px 40px 80px;text-align:center;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url(<?php echo esc_url( HITECH_URI . '/assets/images/hero-bg.jpg' ); ?>) center/cover no-repeat;opacity:.15;z-index:0;"></div>
    <div style="position:relative;z-index:1;max-width:800px;margin:0 auto;">
        <p style="color:var(--orange);font-size:13px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;"><?php echo $svc['icon']; ?> Our Services</p>
        <h1 style="color:#fff;font-size:clamp(2rem,5vw,3rem);font-weight:800;line-height:1.15;margin-bottom:16px;"><?php echo esc_html($svc['title']); ?></h1>
        <p style="color:var(--orange);font-size:1.1rem;font-weight:600;margin-bottom:24px;"><?php echo esc_html($svc['sub']); ?></p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:var(--orange);color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;">📞 Call <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;border:2px solid rgba(255,255,255,.3);">Request a Quote</a>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/trust-bar' ); ?>

<section style="padding:70px 40px 40px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;text-align:center;">
        <p style="font-size:1.05rem;line-height:1.85;color:#444;"><?php echo esc_html($svc['intro']); ?></p>
    </div>
</section>

<?php if(!empty($svc['cards'])): ?>
<section style="padding:20px 40px 80px;background:#fff;">
    <div style="max-width:1200px;margin:0 auto;">
        <h2 style="text-align:center;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;color:#121212;margin-bottom:48px;"><?php echo esc_html($svc['title']); ?> — What We Do</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">
            <?php foreach($svc['cards'] as $card): ?>
            <div style="border:1px solid #eee;border-radius:12px;padding:28px;background:#fff;box-shadow:0 2px 16px rgba(0,0,0,.05);">
                <div style="display:flex;align-items:center;gap:12px;margin-bottom:14px;">
                    <span style="font-size:1.8rem;"><?php echo $card[0]; ?></span>
                    <h3 style="font-size:1rem;font-weight:800;color:#121212;margin:0;"><?php echo esc_html($card[1]); ?></h3>
                </div>
                <p style="color:#555;font-size:.92rem;line-height:1.78;margin:0;"><?php echo esc_html($card[2]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/why-choose-us', null, array( 'context' => $svc['why_us'] ) ); ?>

<?php if(!empty($svc['faq'])): ?>
<section style="padding:70px 40px;background:#f8f8f8;">
    <div style="max-width:800px;margin:0 auto;">
        <h2 style="text-align:center;font-size:clamp(1.5rem,3vw,2rem);font-weight:800;color:#121212;margin-bottom:48px;">Frequently Asked Questions</h2>
        <div style="display:flex;flex-direction:column;gap:16px;">
            <?php foreach($svc['faq'] as $q): ?>
            <div style="background:#fff;border-radius:10px;padding:24px;border:1px solid #e5e5e5;">
                <h3 style="font-size:1rem;font-weight:700;color:#121212;margin:0 0 10px;"><?php echo esc_html($q[0]); ?></h3>
                <p style="color:#555;font-size:.93rem;line-height:1.7;margin:0;"><?php echo esc_html($q[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section style="padding:70px 40px;background:#fff;">
    <div style="max-width:1100px;margin:0 auto;text-align:center;">
        <h2 style="font-size:clamp(1.4rem,3vw,1.9rem);font-weight:800;color:#121212;margin-bottom:12px;">Cities We Serve</h2>
        <p style="color:#666;margin-bottom:36px;">We provide <?php echo esc_html($svc['title']); ?> throughout Grapevine and all DFW communities.</p>
        <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
            <?php
            $cities = array(
                array("Grapevine","locksmith-grapevine"),array("Southlake","locksmith-southlake"),
                array("Colleyville","locksmith-colleyville"),array("Keller","locksmith-keller"),
                array("Flower Mound","locksmith-flower-mound"),array("Bedford","locksmith-bedford"),
                array("Hurst","locksmith-hurst"),array("Euless","locksmith-euless"),
                array("Coppell","locksmith-coppell"),array("Irving","locksmith-irving"),
            );
            foreach($cities as $c): ?>
            <a href="<?php echo esc_url(home_url('/locations/'.$c[1].'/')); ?>" style="background:#f4f4f4;color:#333;padding:9px 18px;border-radius:6px;font-size:14px;font-weight:600;text-decoration:none;border:1px solid #e0e0e0;">📍 <?php echo esc_html($c[0]); ?>, TX</a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section style="background:var(--orange);padding:70px 40px;text-align:center;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="color:#fff;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:16px;">Need <?php echo esc_html($svc['title']); ?> Now?</h2>
        <p style="color:rgba(255,255,255,.85);font-size:1.05rem;margin-bottom:32px;">Call Hi-Tech Key Solutions for immediate service anywhere in Grapevine or DFW. Available 24/7 — no extra charge for nights, weekends, or holidays.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:#fff;color:var(--orange);padding:14px 36px;border-radius:8px;font-weight:800;font-size:1.05rem;text-decoration:none;">📞 <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 36px;border-radius:8px;font-weight:700;font-size:1.05rem;text-decoration:none;border:2px solid rgba(255,255,255,.6);">Request a Quote</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
