		<?php get_header(); ?>

		<div id="banner">
			
		</div>

		<section id="mast">
			<a href="" class="giant-button logo-font">Tell Your <span>Story</span></a>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-bg.jpg" />
		</section>

		<section id="sub-mast">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="logo"/>
		</section>

		<section id="main">

			<h1 class="logo-font"><?php echo the_title() ?></h1>
			
			<?php $featured_stories = new WP_Query(array('post_type' => 'story')); ?>

			<?php if($featured_stories->have_posts()): while($featured_stories->have_posts()): $featured_stories->the_post(); ?>
					<?php get_template_part('article', 'featured'); ?>
			<?php endwhile; endif; ?>

		</section>

		<?php get_footer(); ?>