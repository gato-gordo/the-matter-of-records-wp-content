<?php get_header(); ?>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<article>
		<section id="mast">
			<?php the_post_thumbnail(); ?>
		</section>
		<section id="main">
			<h1 class="logo-font"
			><?php the_title(); ?></h1>
			<p class ="post-meta">By <a href="<?php the_autho_link();
			?>"><?php the_author(); ?></a> 
			</p>
			<?php the_content(); ?>
		</section>
	</article>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>

