		<footer>

			<div id="footer-content">

				<div id="footer-left">
					<p>&#169;<?php echo date('Y'); ?><a href="<?php the_field('copyright_link', 'options'); ?>" target="_blank"><?php the_field('copyright_text', 'options'); ?></a></p>
				</div>

				<div id="footer-right">
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
					</nav>
				</div>

			</div>

		</footer>

		<?php wp_footer() ?>

	</body>
</html>