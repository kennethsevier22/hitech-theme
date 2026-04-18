<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'HITECH_VERSION', '25.2.0' );
define( 'HITECH_URI', get_template_directory_uri() );

/**
 * Returns the primary business phone number from Customizer settings.
 *
 * @since  25.2.0
 * @return string Phone number e.g. '844-713-1898'.
 */
function hitech_phone() {
	return get_theme_mod( 'hitech_phone_primary', '844-713-1898' );
}

/**
 * Returns the primary phone number as digits only for tel: links.
 *
 * @since  25.2.0
 * @return string Digits-only phone string.
 */
function hitech_phone_raw() {
	return preg_replace( '/[^0-9]/', '', hitech_phone() );
}

/**
 * Outputs the site logo img tag.
 *
 * @since  25.2.0
 * @param  int $width  Image width in pixels.
 * @param  int $height Image height in pixels.
 * @return void
 */
function hitech_logo( $width = 180, $height = 52 ) {
	$src = esc_url( HITECH_URI . '/assets/images/logo.svg' );
	$w   = absint( $width );
	$h   = absint( $height );
	$alt = esc_attr__( 'Hi-Tech Key Solutions', 'hitech' );
	echo '<img src="' . $src . '" width="' . $w . '" height="' . $h . '" alt="' . $alt . '" loading="lazy">';
}

function hitech_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'hitech_setup' );

function hitech_scripts() {
    wp_enqueue_style( 'hitech-main', HITECH_URI . '/assets/css/main.css', array(), HITECH_VERSION );
    wp_enqueue_script( 'hitech-main', HITECH_URI . '/assets/js/main.js', array('jquery'), HITECH_VERSION, true );
    wp_localize_script( 'hitech-main', 'HiTechData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'hitech_nonce' ),
    ));
}
add_action( 'wp_enqueue_scripts', 'hitech_scripts' );

add_action( 'elementor/theme/register_locations', function( $manager ) {
    $manager->register_location( 'header' );
    $manager->register_location( 'footer' );
} );

function hitech_handle_contact() {
    check_ajax_referer( 'hitech_nonce', 'nonce' );
    $name    = sanitize_text_field( isset($_POST['name'])    ? $_POST['name']    : '' );
    $phone   = sanitize_text_field( isset($_POST['phone'])   ? $_POST['phone']   : '' );
    $email   = sanitize_email(      isset($_POST['email'])   ? $_POST['email']   : '' );
    $service = sanitize_text_field( isset($_POST['service']) ? $_POST['service'] : '' );
    $message = sanitize_textarea_field( isset($_POST['message']) ? $_POST['message'] : '' );
    if ( empty($phone) && empty($email) ) {
        wp_send_json_error( array( 'message' => 'Please provide a phone or email.' ) );
        return;
    }
    $sent = wp_mail( get_option('admin_email'), 'New Request - Hi-Tech Key Solutions',
        "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nService: {$service}\n\n{$message}" );
    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you! We will be in touch shortly.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Something went wrong. Please call us.' ) );
    }
}
add_action( 'wp_ajax_hitech_contact',        'hitech_handle_contact' );
add_action( 'wp_ajax_nopriv_hitech_contact', 'hitech_handle_contact' );

function hitech_customizer( $wp_customize ) {
    $wp_customize->add_section( 'hitech_business', array( 'title' => 'Business Info', 'priority' => 30 ) );
    $url_fields = array( 'hitech_maps_url', 'hitech_facebook_url', 'hitech_instagram_url' );
    $options = array(
        'hitech_phone_primary' => array( 'label' => 'Primary Phone',   'default' => '844-713-1898' ),
        'hitech_email'         => array( 'label' => 'Email',           'default' => 'Hitechkeysolutions@gmail.com' ),
        'hitech_maps_url'      => array( 'label' => 'Google Maps URL', 'default' => 'https://maps.app.goo.gl/GV8LDV6yM8gTDW8u9' ),
        'hitech_facebook_url'  => array( 'label' => 'Facebook URL',    'default' => '#' ),
        'hitech_instagram_url' => array( 'label' => 'Instagram URL',   'default' => '#' ),
    );
    foreach ( $options as $id => $args ) {
        $cb = in_array( $id, $url_fields, true ) ? 'esc_url_raw' : 'sanitize_text_field';
        $wp_customize->add_setting( $id, array( 'default' => $args['default'], 'sanitize_callback' => $cb ) );
        $wp_customize->add_control( $id, array( 'label' => $args['label'], 'section' => 'hitech_business', 'type' => 'text' ) );
    }
}
add_action( 'customize_register', 'hitech_customizer' );

function hitech_maps_url() {
    return esc_url( get_theme_mod( 'hitech_maps_url', 'https://maps.app.goo.gl/GV8LDV6yM8gTDW8u9' ) );
}

function hitech_phone_svg() {
    return '<svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>';
}

function hitech_contact_form( $class = '' ) { ?>
    <div class="contact-form-wrap <?php echo esc_attr($class); ?>">
        <h3 class="contact-form-title">Your Trusted Locksmith in Grapevine</h3>
        <p class="contact-form-sub">Reach out and let us solve your locksmith needs!</p>
        <form id="hitech-contact-form">
            <?php wp_nonce_field( 'hitech_nonce', 'hitech_nonce_field' ); ?>
            <div class="form-group"><input class="form-input" type="text" name="name" placeholder="Name" required /></div>
            <div class="form-row">
                <input class="form-input" type="tel" name="phone" placeholder="Phone" required />
                <input class="form-input" type="email" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
                <select class="form-select" name="service" required>
                    <option value="" disabled selected>Service Type</option>
                    <option value="Emergency Lock-Out Services">Emergency Lock-Out Services</option>
                    <option value="Residential Locksmith Services">Residential Locksmith Services</option>
                    <option value="Lock Installation and Repair">Lock Installation and Repair</option>
                    <option value="High-Security Locks">High-Security Locks</option>
                    <option value="Car Key Replacement">Car Key Replacement</option>
                    <option value="Rekeying and Master Key Systems">Rekeying and Master Key Systems</option>
                </select>
            </div>
            <div class="form-group"><textarea class="form-textarea" name="message" placeholder="Message"></textarea></div>
            <p class="form-error" id="form-error"></p>
            <button type="submit" class="form-submit">Submit</button>
        </form>
        <div class="form-success" id="form-success" style="display:none;">Thank you! We will be in touch shortly.</div>
    </div>
<?php }

function hitech_hero_styles() {
    $img = esc_url( HITECH_URI . '/assets/images/hero-bg.jpg' );
    echo '<style id="hitech-hero">
.hero-section {
    background-image: url("' . $img . '") !important;
    background-size: cover !important;
    background-position: center center !important;
    background-repeat: no-repeat !important;
    background-attachment: scroll !important;
}
.hero-bg {
    position: absolute !important;
    top: 0 !important; left: 0 !important;
    right: 0 !important; bottom: 0 !important;
    background: rgba(0,0,0,0.68) !important;
    background-image: none !important;
    z-index: 1 !important;
}
.hero-inner {
    position: relative !important; z-index: 2 !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    max-width: 1280px !important;
    margin: 0 auto !important;
    width: 100% !important;
}
.hero-content {
    text-align: center !important;
    margin: 0 auto !important;
    max-width: 820px !important;
    background: rgba(10,10,10,0.85) !important;
    border-radius: 16px !important;
    padding: 48px !important;
    box-shadow: 0 8px 48px rgba(0,0,0,0.6) !important;
    position: relative !important;
    z-index: 3 !important;
}
.hero-btns { justify-content: center !important; }
.hero-sub { margin-left: auto !important; margin-right: auto !important; }
.hero-rating { display: inline-flex !important; }
.hero-rating .rating-stars svg { display: none !important; }
.hero-rating .rating-stars { font-size: 0 !important; display: inline-flex !important; align-items: center !important; }
.hero-rating .rating-stars::after { content: "\2605\2605\2605\2605\2605" !important; font-size: 22px !important; color: #FBBC05 !important; -webkit-text-fill-color: #FBBC05 !important; letter-spacing: 2px !important; display: inline-block !important; font-family: Arial, Helvetica, sans-serif !important; line-height: 1 !important; }
.site-header { background: #121212 !important; }
.nav-link { color: rgba(255,255,255,0.85) !important; }
.nav-link:hover, .nav-link.active { color: #fff !important; }
.hamburger span { background: #fff !important; }
.mobile-nav { background: #121212 !important; border-top: 1px solid rgba(255,255,255,0.1) !important; }
.mobile-nav .nav-link { color: rgba(255,255,255,0.85) !important; }
.banner-left a:first-child svg path { fill: #E1306C !important; }
.banner-left a:nth-child(2) svg path { fill: #1877F2 !important; }
.stars svg { display: none !important; }
.stars { font-size: 0 !important; }
.stars::after { content: "\2605\2605\2605\2605\2605" !important; font-size: 18px !important; color: #FBBC05 !important; -webkit-text-fill-color: #FBBC05 !important; letter-spacing: 2px !important; font-family: Arial, Helvetica, sans-serif !important; display: inline-block !important; }
.reviewer-stars svg { display: none !important; }
.reviewer-stars { font-size: 0 !important; }
.reviewer-stars::after { content: "\2605\2605\2605\2605\2605" !important; font-size: 18px !important; color: #FBBC05 !important; -webkit-text-fill-color: #FBBC05 !important; letter-spacing: 2px !important; font-family: Arial, Helvetica, sans-serif !important; display: inline-block !important; }
.testimonial-stars svg { display: none !important; }
.testimonial-stars { font-size: 0 !important; }
.testimonial-stars::after { content: "\2605\2605\2605\2605\2605" !important; font-size: 18px !important; color: #FBBC05 !important; -webkit-text-fill-color: #FBBC05 !important; letter-spacing: 2px !important; font-family: Arial, Helvetica, sans-serif !important; display: inline-block !important; }
</style>';
}
add_action( 'wp_head', 'hitech_hero_styles', 99 );
