<?php
/*
	Template Name: Submit a Story
*/
?>

<?php get_header(); ?>
	<?php get_template_part('section', 'sub-mast'); ?>

	<section id="main">
		<h1 class="logo-font">Submit A Story</h1>
		<?php 
			gravity_form( 1, true);
		?>

	</section>

<?php get_footer(); ?>
