		<?php get_header(); ?>

		<div id="banner">
			
		</div>

		<section id="mast">
			<a href="<?php echo get_page_link(9); ?>" class="giant-button logo-font">Tell Your <span>Story</span></a>
			<img alt="Tell Story Button" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-bg.jpg" />
		</section>

		<?php get_template_part('section', 'sub-mast'); ?>	

		<section id="main">

			<h1 class="logo-font"><?php echo the_title() ?></h1>
			
			<?php $featured_stories = new WP_Query(array(
				'post_type' => 'story', 
				'meta_query' => array(
					array(
						'key' => 'featured',
						'value' => 1,
						'compare' => '==='
						))
			)); ?>

			<?php if($featured_stories->have_posts()): while($featured_stories->have_posts()): $featured_stories->the_post(); ?>
					<?php get_template_part('article', 'featured'); ?>
			<?php endwhile; endif; ?>

		</section>

		<?php get_footer(); ?>
