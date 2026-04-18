<?php get_header(); ?>
<main style="min-height:60vh;padding:80px 40px;">
    <div class="page-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
