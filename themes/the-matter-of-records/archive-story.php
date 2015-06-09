<?php get_header(); ?>

<?php get_template_part('section', 'sub-mast'); ?>

<section id="main">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('article', 'featured'); ?>
	<?php endwhile; endif; ?>
</section>
