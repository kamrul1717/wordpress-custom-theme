<?php
/**
 * The template for displaying the index page
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg margin-neg-20">
	<div class="container">
		<h1>Welcome To Our Custom Site</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>