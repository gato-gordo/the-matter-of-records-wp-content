<article class="featured-story">
	<header>
		<a href="<?php the_permalink(); ?>" class="image-link">
			<?php the_post_thumbnail(); ?>
		</a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<p class="post-meta">By <a href="author.html"><?php the_author(); ?></a>
	</p>
	<p><?php the_excerpt(); ?></p>
</article>