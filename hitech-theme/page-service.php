<?php
/**
 * Template Name: Service Page
 */
get_header();

$service_name = get_the_title();
$phone     = hitech_phone();
$phone_raw = hitech_phone_raw();

// Service-specific data
$services_data = [
    'emergency-lockout' => [
        'icon'     => '🚨',
        'tagline'  => 'Locked Out? We\'re On Our Way.',
        'hero_sub' => 'Hi-Tech Key Solutions responds to emergency lockouts throughout Grapevine TX and all DFW cities — typically within 15–30 minutes. Day or night, no extra charge.',
        'sections' => [
            [
                'heading' => 'Home Lockout Service — Grapevine TX & DFW',
                'body'    => 'Getting locked out of your home in Grapevine is one of the most stressful situations you can face — especially late at night or during extreme Texas heat. Hi-Tech Key Solutions specializes in fast, damage-free residential lockout service throughout Grapevine TX and all surrounding DFW cities. Our licensed technicians use professional lock-picking tools and bypass techniques to open your door without damaging your lock, frame, or door. We service all types of residential locks including standard deadbolts, smart locks, knob sets, and lever handles. Most home lockouts in Grapevine are resolved in under 15 minutes from our arrival.',
            ],
            [
                'heading' => 'Car Lockout Service — All Makes & Models',
                'body'    => 'Locked your keys in your car in Grapevine TX or anywhere in DFW? Hi-Tech Key Solutions provides professional vehicle lockout service for all makes and models — domestic, foreign, luxury, and commercial vehicles. We use slim jim tools, air wedges, and long-reach equipment to unlock your vehicle without scratching the paint or triggering airbags. Whether you\'re stranded at DFW Airport, in a Grapevine shopping center parking lot, or on the side of Highway 114, our mobile locksmith units respond fast. We also handle car lockouts with broken keys in the ignition or door lock.',
            ],
            [
                'heading' => 'Business & Commercial Lockout Service',
                'body'    => 'A business lockout in Grapevine TX means lost revenue and stranded employees. Hi-Tech Key Solutions prioritizes commercial lockout calls and responds with the tools and expertise to open any commercial lock — standard knob locks, commercial deadbolts, mortise locks, keypad entries, and even high-security commercial cylinders. We service offices, retail stores, restaurants, warehouses, and medical facilities throughout Grapevine and the DFW area. Our commercial lockout service is available 24 hours a day, 7 days a week including all holidays.',
            ],
            [
                'heading' => 'Broken Key Extraction',
                'body'    => 'A key broken inside a lock is a common locksmith emergency in Grapevine TX. Whether the key snapped in your front door deadbolt or broke off in your car ignition, Hi-Tech Key Solutions has the specialized extraction tools to remove the broken piece without damaging the lock. In most cases, we can extract the broken key and rekey the lock on the same visit, saving you the cost of a full lock replacement. We carry broken key extractors for all common lock types including Kwikset, Schlage, Medeco, and most vehicle ignition cylinders.',
            ],
        ],
        'faqs' => [
            ['q' => 'How fast can you get to me in Grapevine TX?', 'a' => 'Our average response time in Grapevine and surrounding DFW cities is 15–30 minutes. We have mobile units stationed throughout the area for rapid response.'],
            ['q' => 'Do you charge extra for late-night lockouts?', 'a' => 'No. Hi-Tech Key Solutions never charges extra for evenings, nights, weekends, or holidays. Our rates are the same 24/7.'],
            ['q' => 'Will you damage my lock or door?', 'a' => 'Our licensed technicians are trained to open locks without causing damage in the vast majority of cases. We always attempt non-destructive entry first.'],
        ],
    ],
    'car-key-replacement' => [
        'icon'     => '🚗',
        'tagline'  => 'New Car Keys Cut & Programmed On-Site.',
        'hero_sub' => 'Hi-Tech Key Solutions replaces and programs car keys for all makes and models in Grapevine TX — at your location, in 30 minutes, at half the dealer cost.',
        'sections' => [
            [
                'heading' => 'Transponder Key Cutting & Programming',
                'body'    => 'Modern vehicle keys contain a transponder chip that must be programmed to match your car\'s immobilizer system — without the right programming, the key will turn but the engine won\'t start. Hi-Tech Key Solutions carries state-of-the-art transponder key programming equipment and serves all major vehicle manufacturers in Grapevine TX including Ford, Chevrolet, Toyota, Honda, Nissan, Jeep, Ram, GMC, Chrysler, Dodge, Subaru, Volkswagen, Hyundai, Kia, and more. We can cut and program a transponder key at your location in Grapevine or anywhere in DFW — no towing required, typically in under 30 minutes.',
            ],
            [
                'heading' => 'Smart Key & Push-to-Start Replacement',
                'body'    => 'Luxury and modern vehicles use proximity smart keys and push-to-start systems that are significantly more expensive at dealerships. Hi-Tech Key Solutions programs smart keys and push-to-start fobs for BMW, Mercedes-Benz, Audi, Lexus, Acura, Infiniti, Cadillac, and all major brands serving Grapevine TX and the DFW area. Our mobile locksmiths carry the latest key programming software to handle even the most advanced vehicle security systems. We typically save Grapevine customers 50–70% compared to dealership key replacement pricing.',
            ],
            [
                'heading' => 'Key Fob Replacement & Programming',
                'body'    => 'Lost or broken key fob? Hi-Tech Key Solutions provides aftermarket and OEM-quality key fob replacement throughout Grapevine TX and DFW. We program fobs for door locks, trunk releases, panic alarms, and remote start systems for virtually all vehicle makes and models. If only your fob is broken but your key still works, we can replace just the fob shell and reprogram it to your existing system — a significant cost saving over a full key replacement. We also handle situations where a vehicle needs to be reset after a key is lost, including clearing old key codes from the vehicle\'s memory.',
            ],
            [
                'heading' => 'Duplicate Car Keys — Spare Set',
                'body'    => 'The smartest time to get a duplicate car key in Grapevine TX is before you need one. Hi-Tech Key Solutions provides spare key cutting and programming for all vehicles at a fraction of dealership cost. A spare transponder key for most vehicles runs $150–$250 with us versus $300–$500 at a dealership, and we come to your home or office in Grapevine or anywhere in DFW. Having a spare key can save you from a costly emergency lockout call in the future. We recommend every Grapevine driver keep a spare key in a safe location.',
            ],
        ],
        'faqs' => [
            ['q' => 'Can you make a key if I have no key at all?', 'a' => 'Yes. We can create a key from scratch using your VIN number and vehicle identification. We verify ownership before cutting any key.'],
            ['q' => 'How much does car key replacement cost in Grapevine TX?', 'a' => 'Pricing depends on the vehicle year, make, and key type. Standard transponder keys start around $150–$200. Smart keys and luxury vehicle keys range from $200–$400. Always less than the dealership.'],
            ['q' => 'Do you come to my location?', 'a' => 'Yes. All our car key replacement services are mobile — we come to your home, office, or wherever you are in Grapevine or DFW.'],
        ],
    ],
    'rekey-locks' => [
        'icon'     => '🔑',
        'tagline'  => 'New Keys. Same Locks. Instant Security.',
        'hero_sub' => 'Hi-Tech Key Solutions rekeyes locks throughout Grapevine TX and DFW — fast, affordable, and just as secure as full replacement.',
        'sections' => [
            [
                'heading' => 'What Is Rekeying & How Does It Work?',
                'body'    => 'Rekeying a lock means changing the internal pin configuration so that old keys no longer work and only new keys will operate the lock. The lock hardware stays in place — only the internal cylinder pins are replaced to match a new key cut. This process takes approximately 10–15 minutes per lock and costs significantly less than full lock replacement. Hi-Tech Key Solutions rekeyes all major lock brands throughout Grapevine TX and DFW including Kwikset, Schlage, Baldwin, Yale, Medeco, and Mul-T-Lock.',
            ],
            [
                'heading' => 'Rekeying for New Homeowners in Grapevine TX',
                'body'    => 'If you\'ve recently purchased or moved into a home in Grapevine TX, rekeying your locks immediately is one of the most important security steps you can take. You have no way of knowing how many copies of the previous keys exist — former owners, real estate agents, contractors, housekeepers, and neighbors may all have copies. Hi-Tech Key Solutions offers a new homeowner rekeying package that covers all exterior locks in your Grapevine home at a discounted rate. We can also rekey all locks to a single master key for convenience.',
            ],
            [
                'heading' => 'Master Key Systems for Grapevine Businesses',
                'body'    => 'A master key system allows a single master key to open all locks on a property while individual keys only open specific doors. This is ideal for property managers, business owners, and landlords throughout Grapevine and DFW who need to maintain controlled access across multiple units or departments. Hi-Tech Key Solutions designs and implements master key systems for commercial properties, apartment complexes, office buildings, and multi-unit residential properties. We work with all major commercial lock brands and can integrate new master key systems with your existing lock hardware.',
            ],
            [
                'heading' => 'Rekeying After Lost Keys or Tenant Turnover',
                'body'    => 'Lost a key in Grapevine TX? Had an employee termination? Changed tenants? These are all situations where rekeying is the immediate security solution. Unlike replacing the entire lock, rekeying can be done the same day and costs a fraction of the price. Hi-Tech Key Solutions serves Grapevine landlords, property managers, and business owners throughout DFW with fast turnaround rekeying service — often same-day appointments available. We also offer an ongoing property management rekeying program for high-turnover rental properties.',
            ],
        ],
        'faqs' => [
            ['q' => 'How much does rekeying cost in Grapevine TX?', 'a' => 'Rekeying starts at approximately $25–$35 per lock plus a service call fee. Rekeying a full home in Grapevine with 3–4 exterior locks typically costs $100–$150 total.'],
            ['q' => 'How long does rekeying take?', 'a' => 'Most residential rekeying jobs in Grapevine take 30–60 minutes depending on the number of locks. Commercial jobs may take longer.'],
            ['q' => 'Is rekeying as secure as replacing the lock?', 'a' => 'Yes — rekeying changes which keys work in the lock. If your existing lock hardware is in good condition, rekeying provides the same level of security as replacement.'],
        ],
    ],
    'high-security-locks' => [
        'icon'     => '🛡️',
        'tagline'  => 'Maximum Protection for Grapevine Homes & Businesses.',
        'hero_sub' => 'Hi-Tech Key Solutions installs pick-resistant, bump-resistant, drill-resistant lock systems throughout Grapevine TX and DFW. Free security assessment included.',
        'sections' => [
            [
                'heading' => 'Why Standard Locks Aren\'t Enough in Grapevine TX',
                'body'    => 'Most homes and businesses in Grapevine TX are protected by Grade 3 residential locks — the cheapest locks available at hardware stores. An experienced burglar can pick or bump these locks in under 30 seconds. High-security lock systems use patented pin configurations, hardened steel housings, and anti-drill plates that resist even professional-grade attack tools. Hi-Tech Key Solutions performs free security assessments for Grapevine homeowners and business owners to identify vulnerabilities and recommend appropriate high-security upgrades within your budget.',
            ],
            [
                'heading' => 'Medeco High-Security Lock Installation',
                'body'    => 'Medeco is widely considered the gold standard of residential and commercial high-security locks. Medeco cylinders feature patented rotating and elevating pins that make picking virtually impossible, a hardened steel housing that resists drilling, and a patented keyway that prevents unauthorized key duplication. Hi-Tech Key Solutions is an authorized Medeco installer serving Grapevine TX and the entire DFW area. Every Medeco key cut is registered and requires your authorization — meaning your Grapevine home is protected against unauthorized key copying even at hardware stores.',
            ],
            [
                'heading' => 'Schlage Grade 1 Deadbolt Installation',
                'body'    => 'For Grapevine homeowners seeking superior protection at a more accessible price point, Schlage B-Series Grade 1 deadbolts represent the top tier of residential security. ANSI Grade 1 is the highest security rating for residential locks, requiring resistance to 10 kicks at 150 lbs and 250,000 operating cycles. Hi-Tech Key Solutions installs Schlage B60N, B62N, and B-Series Camelot deadbolts throughout Grapevine TX and DFW. We also install Schlage Connect smart deadbolts that combine Grade 1 security with app-controlled access and keypad entry.',
            ],
            [
                'heading' => 'Door Reinforcement & Strike Plate Upgrades',
                'body'    => 'Even the best lock can be defeated by a weak door frame. Most residential doors in Grapevine TX use 1-inch strike plates secured with short 3/4-inch screws — a properly placed kick can defeat this in a single blow. Hi-Tech Key Solutions installs door jamb armor and extended strike plates with 3-inch screws that anchor into the stud behind the frame, reducing kick-in success by over 95%. We also install hinge bolts, door barricade bars, and reinforced door edge guards as part of a complete door security upgrade for Grapevine homes and businesses.',
            ],
        ],
        'faqs' => [
            ['q' => 'How much does a high-security lock installation cost in Grapevine TX?', 'a' => 'High-security lock installation ranges from $150–$500+ per lock depending on the brand and security level. Medeco and Mul-T-Lock systems cost more but offer the highest protection available.'],
            ['q' => 'Do you offer free security assessments?', 'a' => 'Yes. Hi-Tech Key Solutions offers complimentary security assessments for Grapevine homeowners and business owners. We identify vulnerabilities and provide honest recommendations.'],
            ['q' => 'Can I get high-security locks for my business in Grapevine TX?', 'a' => 'Absolutely. We install commercial-grade high-security lock systems for businesses of all sizes throughout Grapevine and DFW.'],
        ],
    ],
    'residential-locksmith' => [
        'icon'     => '🏠',
        'tagline'  => 'Protecting Grapevine Homes — One Lock at a Time.',
        'hero_sub' => 'Hi-Tech Key Solutions is the trusted residential locksmith for Grapevine TX homeowners — emergency lockouts, new lock installation, rekeying, and smart lock upgrades.',
        'sections' => [
            [
                'heading' => 'Home Lockout Service — Fast Response in Grapevine TX',
                'body'    => 'Locking yourself out of your Grapevine TX home is more common than you\'d think — and it always seems to happen at the worst time. Hi-Tech Key Solutions provides 24/7 emergency home lockout service throughout Grapevine and all DFW cities, with an average response time of 15–30 minutes. Our licensed technicians arrive in marked vehicles and use non-destructive entry techniques to open your door without damaging your lock or frame. We carry ID verification and service credentials for your peace of mind. Homeowner lockout service is one of our most common calls throughout Grapevine TX.',
            ],
            [
                'heading' => 'Deadbolt & Lock Installation for Grapevine Homes',
                'body'    => 'Whether you\'re upgrading your Grapevine TX home\'s security or replacing a worn-out lock, Hi-Tech Key Solutions installs all types of residential locks with precision. We install single and double-cylinder deadbolts, knob sets, lever handles, door chain guards, security bars, and padlocks throughout Grapevine and DFW. Our technicians are trained to install locks correctly the first time — properly aligned strike plates, correct backset, and secure fastening ensure your new Grapevine locks perform at their rated security level. We also upgrade existing door jambs and strike plates to prevent kick-in attacks.',
            ],
            [
                'heading' => 'Smart Lock Installation in Grapevine TX',
                'body'    => 'Smart locks are the fastest-growing home security upgrade in Grapevine TX. Hi-Tech Key Solutions installs and programs the leading smart lock brands including Schlage Encode, Kwikset Halo, August Smart Lock, Yale Assure, and Nest x Yale. Smart locks offer keypad entry, Bluetooth unlock from your phone, Wi-Fi integration with Alexa and Google Home, temporary access codes for guests and housekeepers, and a complete entry log so you always know who came and went at your Grapevine home. Our technicians handle the full installation and app setup so your smart lock works perfectly from day one.',
            ],
            [
                'heading' => 'Lock Repair Services for Grapevine Homeowners',
                'body'    => 'Stiff, sticky, misaligned, or malfunctioning locks are both inconvenient and a security risk. Hi-Tech Key Solutions provides residential lock repair services throughout Grapevine TX — we diagnose and fix locks that won\'t turn smoothly, deadbolts that don\'t extend fully, locks with worn or damaged internal mechanisms, and locks that have been damaged during a break-in attempt. In many cases, a professional repair is faster and more affordable than a full replacement. Our Grapevine locksmith technicians carry replacement parts for all major residential lock brands including Schlage, Kwikset, Baldwin, and Defiant.',
            ],
        ],
        'faqs' => [
            ['q' => 'How quickly can you respond to a home lockout in Grapevine TX?', 'a' => 'Our average response time for residential lockouts in Grapevine is 15–30 minutes. We have technicians on call 24/7 throughout the DFW area.'],
            ['q' => 'Do I need to show proof of residence?', 'a' => 'Yes. For security, we ask homeowners to provide a photo ID and proof of residence before opening any residential lock.'],
            ['q' => 'Can you install smart locks on any door?', 'a' => 'Most standard doors with a single-cylinder deadbolt can be upgraded to a smart lock. We assess your door during our visit and recommend compatible options.'],
        ],
    ],
    'commercial-locksmith' => [
        'icon'     => '🏢',
        'tagline'  => 'Complete Security Solutions for Grapevine Businesses.',
        'hero_sub' => 'Hi-Tech Key Solutions provides professional commercial locksmith services to businesses throughout Grapevine TX and DFW — available 24/7 for emergency lockouts.',
        'sections' => [
            [
                'heading' => 'Emergency Business Lockout Service in Grapevine TX',
                'body'    => 'A commercial lockout in Grapevine TX means locked-out employees, missed appointments, and lost revenue. Hi-Tech Key Solutions prioritizes commercial lockout calls and dispatches the nearest available technician immediately. We respond to business lockouts throughout Grapevine and all DFW cities 24 hours a day, 7 days a week including holidays. Our commercial locksmiths are equipped to open standard commercial knob locks, commercial deadbolts, mortise locks, keypad entry systems, and high-security commercial cylinders. Most Grapevine commercial lockouts are resolved within 30 minutes of our arrival.',
            ],
            [
                'heading' => 'Master Key System Design & Installation',
                'body'    => 'A well-designed master key system is the foundation of commercial security for Grapevine TX businesses. Hi-Tech Key Solutions designs and installs master key systems that give management complete access to all doors while restricting employee access to only the areas they need. We work with Grapevine businesses of all sizes — from small retail stores to large office complexes and multi-unit apartment buildings. Our master key systems are expandable as your business grows and can be rekeyed quickly when employees leave, without disrupting access for other keyholders.',
            ],
            [
                'heading' => 'Commercial Lock Installation & Hardware',
                'body'    => 'Commercial properties in Grapevine TX require significantly heavier-duty hardware than residential applications. Hi-Tech Key Solutions installs and services commercial-grade cylindrical locks, mortise locks, rim exit devices, surface-mounted deadbolts, and door closers for businesses throughout Grapevine and DFW. We work with all major commercial hardware manufacturers including Schlage, Corbin Russwin, Sargent, BEST, and Yale. Whether you\'re fitting out a new office in Grapevine or upgrading security hardware at an existing location, our commercial locksmith team delivers installations that meet ADA compliance and local building code requirements.',
            ],
            [
                'heading' => 'Safe Services for Grapevine Businesses',
                'body'    => 'Hi-Tech Key Solutions provides professional safe services for businesses throughout Grapevine TX and DFW including safe opening, combination changes, safe repair, and new safe installation. Whether you\'ve forgotten the combination to an existing safe, acquired a safe without the combination, or need to change access codes after an employee departure, our safe technicians can help. We service floor safes, wall safes, fireproof file safes, depository safes, and high-security vault doors for Grapevine businesses. We also advise on and supply new safes appropriate for your security requirements and budget.',
            ],
        ],
        'faqs' => [
            ['q' => 'Do you service commercial properties throughout DFW, not just Grapevine?', 'a' => 'Yes. Hi-Tech Key Solutions provides commercial locksmith services throughout the entire DFW metroplex including Southlake, Colleyville, Keller, Irving, Bedford, Hurst, Euless, Coppell, and Flower Mound.'],
            ['q' => 'Can you rekey our entire office after an employee leaves?', 'a' => 'Yes, and we recommend it. We can rekey your entire Grapevine TX office quickly — often same-day — to ensure terminated employees no longer have access.'],
            ['q' => 'Do you install panic bars and exit devices?', 'a' => 'Yes. We install, repair, and replace all types of panic bars and exit devices for commercial properties throughout Grapevine TX and DFW.'],
        ],
    ],
    'access-control' => [
        'icon'     => '📲',
        'tagline'  => 'Go Keyless. Control Who Gets In and When.',
        'hero_sub' => 'Hi-Tech Key Solutions designs and installs professional access control systems for homes and businesses throughout Grapevine TX and all DFW cities.',
        'sections' => [
            [
                'heading' => 'Keypad Access Control Systems for Grapevine TX',
                'body'    => 'Keypad access control systems are the most popular entry-level upgrade for Grapevine TX homes and businesses. Instead of physical keys, authorized users enter a PIN code to gain access. PIN codes can be changed instantly without the cost of rekeying — ideal for Grapevine businesses with high employee turnover or homeowners who frequently have service workers, housekeepers, or guests needing temporary access. Hi-Tech Key Solutions installs standalone keypad locks and networked keypad systems with central management for multi-door applications throughout Grapevine and DFW.',
            ],
            [
                'heading' => 'Card & Key Fob Access Control for Grapevine Businesses',
                'body'    => 'Card reader and key fob access control systems are the industry standard for commercial properties in Grapevine TX. Each employee carries a programmed card or fob that grants access to their authorized doors only. When an employee leaves your Grapevine business, you deactivate their credential in seconds — no rekeying required. Hi-Tech Key Solutions installs proximity card systems, smart card systems, and RFID fob systems from leading manufacturers including HID, Honeywell, and Avigilon. We handle everything from single-door card readers to complete building-wide access control networks for Grapevine TX commercial properties.',
            ],
            [
                'heading' => 'Smart Lock & App-Based Access Control',
                'body'    => 'Cloud-based smart access control lets Grapevine TX business owners and property managers manage access from anywhere via smartphone. Assign access permissions, set time-of-day restrictions, view real-time entry logs, and lock or unlock doors remotely. Hi-Tech Key Solutions installs commercial-grade Wi-Fi and Bluetooth smart lock systems from August, Schlage, Yale, Brivo, and Kisi throughout Grapevine and DFW. These systems integrate with existing security cameras, alarm systems, and building management software for a complete smart security ecosystem at your Grapevine TX property.',
            ],
            [
                'heading' => 'Video Intercom & Visitor Management Systems',
                'body'    => 'Video intercom systems let Grapevine TX property owners see, speak with, and grant access to visitors before opening any door. Hi-Tech Key Solutions installs video doorbell intercoms for residential properties and multi-tenant video intercom systems for Grapevine apartment complexes, office buildings, and medical practices. Modern video intercom systems integrate with mobile apps so you can manage visitor access from anywhere — grant entry to a delivery driver at your Grapevine home while you\'re at work, or screen visitors at your DFW office before they enter your building. We install systems from 2N, DoorBird, Aiphone, and Comelit throughout the Grapevine and DFW area.',
            ],
        ],
        'faqs' => [
            ['q' => 'What\'s the best access control system for a small Grapevine TX business?', 'a' => 'For most small businesses in Grapevine with 1–5 doors and under 20 employees, a standalone keypad or key fob system is the best value. We\'ll assess your specific needs and recommend accordingly.'],
            ['q' => 'Can access control integrate with my existing alarm system?', 'a' => 'In most cases, yes. Hi-Tech Key Solutions can integrate new access control with many existing alarm and CCTV systems used in Grapevine TX and DFW.'],
            ['q' => 'Do you offer ongoing maintenance for access control systems in Grapevine TX?', 'a' => 'Yes. We offer maintenance contracts for commercial access control systems throughout Grapevine and DFW to ensure your system remains operational and up to date.'],
        ],
    ],
];

// Get slug from current page
$slug = get_post_field('post_name', get_post());
$data = $services_data[$slug] ?? [
    'icon' => '🔒', 'tagline' => 'Professional Locksmith Service.',
    'hero_sub' => 'Hi-Tech Key Solutions provides expert locksmith services throughout Grapevine TX and all DFW cities — available 24/7.',
    'sections' => [], 'faqs' => []
];
?>

<!-- Hero -->
<section style="background:linear-gradient(135deg,#0a0a0a 60%,#1a0a00 100%);padding:100px 40px 80px;text-align:center;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background:url(<?php echo esc_url( HITECH_URI . '/assets/images/hero-bg.jpg' ); ?>) center/cover no-repeat;opacity:.15;z-index:0;"></div>
    <div style="position:relative;z-index:1;max-width:820px;margin:0 auto;">
        <p style="color:var(--orange);font-size:13px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:16px;"><?php echo $data['icon']; ?> Grapevine TX & DFW</p>
        <h1 style="color:#fff;font-size:clamp(2rem,5vw,3.2rem);font-weight:800;line-height:1.15;margin-bottom:20px;">
            <?php echo esc_html($service_name); ?><br>
            <span style="color:var(--orange);"><?php echo esc_html($data['tagline']); ?></span>
        </h1>
        <p style="color:rgba(255,255,255,.75);font-size:1.1rem;max-width:640px;margin:0 auto 32px;"><?php echo esc_html($data['hero_sub']); ?></p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:var(--orange);color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;">📞 Call <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 32px;border-radius:8px;font-weight:700;font-size:1rem;text-decoration:none;border:2px solid rgba(255,255,255,.3);">Request a Quote</a>
        </div>
    </div>
</section>

<!-- Trust Bar -->
<section style="background:#f8f8f8;border-bottom:1px solid #eee;padding:20px 40px;">
    <div style="max-width:1100px;margin:0 auto;display:flex;gap:40px;justify-content:center;flex-wrap:wrap;">
        <?php foreach([
            ['⭐','4.9-Star Rating','207 Google Reviews'],
            ['⏱','15–30 Min Response','Grapevine TX & DFW'],
            ['🔒','Licensed & Insured','Background-Checked Techs'],
            ['📞','Available 24/7','No Extra Charge Nights/Weekends'],
        ] as $t): ?>
        <div style="display:flex;align-items:center;gap:10px;">
            <span style="font-size:1.5rem;"><?php echo $t[0]; ?></span>
            <div>
                <div style="font-weight:700;font-size:14px;color:#121212;"><?php echo $t[1]; ?></div>
                <div style="font-size:12px;color:#666;"><?php echo $t[2]; ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Service Detail Sections -->
<?php if(!empty($data['sections'])): ?>
<section style="padding:80px 40px;background:#fff;">
    <div style="max-width:1000px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:56px;">
            <p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:12px;"><?php echo $data['icon']; ?> Full Service Details</p>
            <h2 style="font-size:clamp(1.6rem,3vw,2.4rem);font-weight:800;color:#121212;margin-bottom:16px;"><?php echo esc_html($service_name); ?> in Grapevine TX & DFW</h2>
        </div>
        <div style="display:flex;flex-direction:column;gap:48px;">
            <?php foreach($data['sections'] as $i => $section): ?>
            <div style="display:grid;grid-template-columns:1fr 3fr;gap:40px;align-items:start;padding-bottom:48px;border-bottom:1px solid #f0f0f0;">
                <div>
                    <div style="width:52px;height:52px;background:var(--orange);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;margin-bottom:16px;"><?php echo $data['icon']; ?></div>
                    <div style="font-size:13px;font-weight:700;color:var(--orange);text-transform:uppercase;letter-spacing:1px;">0<?php echo $i+1; ?></div>
                </div>
                <div>
                    <h3 style="font-size:1.25rem;font-weight:800;color:#121212;margin-bottom:16px;"><?php echo esc_html($section['heading']); ?></h3>
                    <p style="color:#555;font-size:1rem;line-height:1.8;"><?php echo esc_html($section['body']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- FAQ Section -->
<?php if(!empty($data['faqs'])): ?>
<section style="background:#f8f8f8;padding:70px 40px;">
    <div style="max-width:800px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:48px;">
            <p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:12px;">❓ Common Questions</p>
            <h2 style="font-size:clamp(1.5rem,3vw,2rem);font-weight:800;color:#121212;">Frequently Asked Questions</h2>
        </div>
        <div style="display:flex;flex-direction:column;gap:16px;">
            <?php foreach($data['faqs'] as $faq): ?>
            <div style="background:#fff;border-radius:10px;padding:24px 28px;border:1px solid #eee;">
                <div style="font-weight:700;font-size:1rem;color:#121212;margin-bottom:10px;">Q: <?php echo esc_html($faq['q']); ?></div>
                <div style="color:#555;font-size:.95rem;line-height:1.7;">A: <?php echo esc_html($faq['a']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Related Services -->
<section style="padding:70px 40px;background:#fff;">
    <div style="max-width:1100px;margin:0 auto;">
        <div style="text-align:center;margin-bottom:40px;">
            <p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:12px;">🔑 More Services</p>
            <h2 style="font-size:clamp(1.3rem,2.5vw,1.8rem);font-weight:800;color:#121212;">Other Locksmith Services in Grapevine TX</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;">
            <?php
            $all_services = [
                ['Emergency Lockout','🚨','/services/emergency-lockout/'],
                ['Car Key Replacement','🚗','/services/car-key-replacement/'],
                ['Rekey Locks','🔑','/services/rekey-locks/'],
                ['High Security Locks','🛡️','/services/high-security-locks/'],
                ['Residential Locksmith','🏠','/services/residential-locksmith/'],
                ['Commercial Locksmith','🏢','/services/commercial-locksmith/'],
                ['Access Control','📲','/services/access-control/'],
            ];
            foreach($all_services as $svc):
                if(strpos(get_the_permalink(), $svc[2]) !== false) continue;
            ?>
            <a href="<?php echo esc_url(home_url($svc[2])); ?>" style="display:flex;align-items:center;gap:12px;padding:16px 20px;background:#f8f8f8;border-radius:8px;text-decoration:none;font-weight:600;font-size:.9rem;color:#121212;border:1px solid #eee;transition:border-color .2s;">
                <span style="font-size:1.4rem;"><?php echo $svc[1]; ?></span>
                <?php echo esc_html($svc[0]); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background:var(--orange);padding:70px 40px;text-align:center;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="color:#fff;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:16px;">Need <?php echo esc_html($service_name); ?> in Grapevine TX?</h2>
        <p style="color:rgba(255,255,255,.85);font-size:1.05rem;margin-bottom:32px;">Call Hi-Tech Key Solutions now for fast, professional service throughout Grapevine TX and all DFW cities. Available 24/7 — no extra charge for nights or weekends.</p>
        <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" style="background:#fff;color:var(--orange);padding:14px 36px;border-radius:8px;font-weight:800;font-size:1.05rem;text-decoration:none;">📞 <?php echo esc_html($phone); ?></a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="background:transparent;color:#fff;padding:14px 36px;border-radius:8px;font-weight:700;font-size:1.05rem;text-decoration:none;border:2px solid rgba(255,255,255,.6);">Request a Quote</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
