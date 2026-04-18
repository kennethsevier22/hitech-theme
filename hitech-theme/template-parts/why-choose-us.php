<?php
/**
 * Template Part: Why Choose Us
 * Usage: get_template_part( 'template-parts/why-choose-us', null, array('context' => 'Grapevine') );
 */
$args    = isset( $args ) ? $args : array();
$context = isset( $args['context'] ) ? $args['context'] : 'Grapevine & DFW';
$phone   = hitech_phone();
$phone_raw = hitech_phone_raw();
$stats   = array(
	array( '🏆', '25+ Years',     'Serving ' . $context . ' since 1999' ),
	array( '⚡',  'Fast Response', '15-30 min arrival' ),
	array( '✅', 'Licensed & Insured', 'Fully certified' ),
	array( '⭐', '207 Reviews',   '4.9-star Google rating' ),
);
?>
<section class="section-pad" style="background:#121212;">
	<div class="page-container" style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
		<div>
			<p style="color:var(--orange);font-size:12px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-bottom:14px;"><?php esc_html_e( 'WHY CHOOSE US', 'hitech' ); ?></p>
			<h2 style="color:#fff;font-size:clamp(1.5rem,3vw,2rem);font-weight:800;margin-bottom:18px;">
				<?php printf( esc_html__( 'Why %s Trusts Hi-Tech Key Solutions', 'hitech' ), esc_html( $context ) ); ?>
			</h2>
			<p style="color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:28px;">
				<?php esc_html_e( 'With over 25 years serving the DFW area, we have built our reputation one lockout at a time. Every technician is background-checked, licensed, and carries full insurance.', 'hitech' ); ?>
			</p>
			<a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="primary-btn"><?php echo esc_html( $phone ); ?></a>
		</div>
		<div style="display:grid;grid-template-columns:1fr 1fr;gap:18px;">
			<?php foreach ( $stats as $stat ) : ?>
			<div style="background:rgba(255,255,255,.07);border-radius:10px;padding:18px;">
				<div style="font-size:1.5rem;margin-bottom:8px;" aria-hidden="true"><?php echo esc_html( $stat[0] ); ?></div>
				<div style="color:#fff;font-weight:700;font-size:.9rem;margin-bottom:3px;"><?php echo esc_html( $stat[1] ); ?></div>
				<div style="color:rgba(255,255,255,.45);font-size:.8rem;"><?php echo esc_html( $stat[2] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
