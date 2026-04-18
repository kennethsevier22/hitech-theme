<?php get_header(); ?>
<main style="min-height:60vh;">
    <section class="page-hero"><div class="page-hero-bg"></div>
        <div class="page-hero-content"><h1 class="page-hero-title"><?php the_title(); ?></h1></div>
    </section>
    <div class="page-container" style="padding:60px 40px 80px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
