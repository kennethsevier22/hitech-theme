<?php
/**
 * Template Part: CTA Strip
 * Usage: get_template_part( 'template-parts/cta-strip', null, array('title' => 'Custom headline') );
 */
$args     = isset( $args ) ? $args : array();
$title    = isset( $args['title'] ) ? $args['title'] : 'Need a Locksmith Now?';
$subtitle = isset( $args['subtitle'] ) ? $args['subtitle'] : 'Call Hi-Tech Key Solutions for immediate 24/7 service anywhere in Grapevine or DFW. No extra charge for nights, weekends, or holidays.';
$phone    = hitech_phone();
$phone_raw = hitech_phone_raw();
?>
<section class="cta-section section-pad">
	<div class="cta-inner" style="text-align:center;max-width:700px;margin:0 auto;">
		<h2 style="color:#fff;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:800;margin-bottom:16px;"><?php echo esc_html( $title ); ?></h2>
		<p style="color:rgba(255,255,255,.85);font-size:1.05rem;margin-bottom:32px;"><?php echo esc_html( $subtitle ); ?></p>
		<div class="cta-buttons">
			<a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="white-btn">📞 <?php echo esc_html( $phone ); ?></a>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="ghost-btn" style="border-color:rgba(255,255,255,.6);"><?php esc_html_e( 'Request a Quote', 'hitech' ); ?></a>
		</div>
	</div>
</section>
