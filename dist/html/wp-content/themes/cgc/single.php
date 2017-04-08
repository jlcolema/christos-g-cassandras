<?php get_header(); ?>

	<article class="post-article">

		<?php if ( get_field( 'post_hero' ) ) : ?>

			<div class="post-hero">

				<img src="<?php the_field( 'post_hero' ); ?>" alt="" />

			</div>

		<?php else : ?>

			<div class="post-hero">

				<img src="holder.js/800x600?theme=gray&outline=yes&auto=yes" alt="" />

			</div>

		<?php endif; ?>

		<h1 class="post-title"><?php the_title(); ?></h1>

		<div class="post-content">

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>

		<div class="post-share">

			Share: <a href="#">Options will appear here.</a></p>

		</div>

	</article>

<?php get_footer(); ?>
