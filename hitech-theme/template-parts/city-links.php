<?php
/**
 * Template Part: City Links Grid
 * Usage: get_template_part( 'template-parts/city-links', null, array('service' => 'Emergency Lockout') );
 */
$args    = isset( $args ) ? $args : array();
$service = isset( $args['service'] ) ? $args['service'] : 'Locksmith Services';
$cities  = array(
	array( 'Grapevine',    'locksmith-grapevine' ),
	array( 'Southlake',    'locksmith-southlake' ),
	array( 'Colleyville',  'locksmith-colleyville' ),
	array( 'Keller',       'locksmith-keller' ),
	array( 'Flower Mound', 'locksmith-flower-mound' ),
	array( 'Bedford',      'locksmith-bedford' ),
	array( 'Hurst',        'locksmith-hurst' ),
	array( 'Euless',       'locksmith-euless' ),
	array( 'Coppell',      'locksmith-coppell' ),
	array( 'Irving',       'locksmith-irving' ),
);
?>
<section class="section-pad" style="background:#fff;">
	<div class="page-container" style="text-align:center;">
		<h2 style="font-size:clamp(1.4rem,3vw,1.9rem);font-weight:800;color:#121212;margin-bottom:12px;">
			<?php esc_html_e( 'Cities We Serve', 'hitech' ); ?>
		</h2>
		<p style="color:#666;margin-bottom:36px;">
			<?php printf( esc_html__( 'We provide %s throughout Grapevine and all DFW communities.', 'hitech' ), esc_html( $service ) ); ?>
		</p>
		<div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
			<?php foreach ( $cities as $city ) : ?>
			<a href="<?php echo esc_url( home_url( '/locations/' . $city[1] . '/' ) ); ?>"
			   style="background:#f4f4f4;color:#333;padding:9px 18px;border-radius:6px;font-size:14px;font-weight:600;text-decoration:none;border:0.5px solid #e0e0e0;">
				📍 <?php echo esc_html( $city[0] ); ?>, TX
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
