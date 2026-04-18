<?php
/**
 * Template Part: Trust Bar
 * Usage: get_template_part( 'template-parts/trust-bar' );
 * Usage with city: get_template_part( 'template-parts/trust-bar', null, array( 'city' => $city ) );
 */
$args = isset( $args ) ? $args : array();
$trust_city = isset( $args['city'] ) && $args['city'] ? esc_html( $args['city'] ) . ' & DFW' : 'Grapevine & DFW';
$items = array(
	array( '⭐', '4.9-Star Rating',    '207 Google Reviews' ),
	array( '⏱',  '15-30 Min Response', 'Throughout ' . $trust_city ),
	array( '🔒', 'Licensed & Insured', 'Background-Checked Techs' ),
	array( '📞', 'Available 24/7',     'No Extra Charge Nights/Weekends' ),
);
?>
<section class="trust-bar-section">
	<div class="trust-bar-inner">
		<?php foreach ( $items as $item ) : ?>
		<div class="trust-bar-item">
			<span class="trust-bar-icon" aria-hidden="true"><?php echo esc_html( $item[0] ); ?></span>
			<div>
				<div class="trust-bar-label"><?php echo esc_html( $item[1] ); ?></div>
				<div class="trust-bar-sub"><?php echo esc_html( $item[2] ); ?></div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>
