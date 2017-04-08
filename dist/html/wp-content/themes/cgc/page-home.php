<?php get_header(); ?>

	<!-- Welcome -->

	<div class="module module-welcome-message">

		<div class="module-header">

			<h1 class="module-title">Welcome</h1>

		</div>

		<div class="module-content">

			<div class="photo">

				<img src="/wp-content/uploads/christos-g-cassandras-portrait-100x125.jpg" alt="A very nice description" />

			</div>

			<?php the_field( 'home_welcome' ); ?>

		</div>

	</div>

	<div class="module module-recent-news">

		<div class="module-header">

			<h2 class="module-title">News</h2>

		</div>

		<div class="module-content">

			<?php

				$args = array(

					'numberposts' 	=> 5,
					'post_type'		=> 'post',
					'orderby'		=> 'date',
					'post_status'	=> 'publish',
					// 'order'			=> 'DESC'

				);

				$posts = get_posts( $args );

			?>

			<?php foreach ( $posts as $post ) : ?>

				<?php

					/* Thumbnail
					--------------------------------------*/

					// Attachment

					$post_thumbnail_attachment_id = get_field( 'post_thumbnail', $project->ID );

					// Size

					$post_thumbnail_size_full = "full";

					// Options

					$post_thumbnail_full = wp_get_attachment_image_src( $post_thumbnail_attachment_id, $post_thumbnail_size_full );

				?>

				<?php setup_postdata($post); ?>

				<article class="summary">

					<div class="thumbnail">

						<a href="<?php the_permalink(); ?>">

							<img src="<?php echo $post_thumbnail_full[0]; ?>" alt="A very nice description." />

						</a>

					</div>

					<h1 class="title">

						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

					</h1>

					<footer>

						<time datetime="" class="pubdate"><?php echo get_the_date( 'F Y' ); ?></time>

					</footer>

				</article>

			<?php endforeach; ?>

			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<div class="more module-more">

				<a href="/news/">All News</a>

			</div>

		</div>

	</div>

	<div class="module module-selected-publications">

		<div class="module-header">

			<h2 class="module-title">Selected Publications</h2>

		</div>

		<div class="module-content">

			<?php

				$posts = get_field('home_selected_publications');

				if ( $posts ) :

			?>

    			<?php foreach( $posts as $post) : // variable must be called $post (IMPORTANT) ?>

        			<?php setup_postdata($post); ?>

					<article class="summary">

						<h1 class="title">

							<a href="http://example.com" rel="external"><?php the_title(); ?></a>

						</h1>

						<div class="need-title">

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

						</div>

						<footer>

							<time datetime="" class="pubdate"><?php echo get_the_date( 'F Y' ); ?></time>

						</footer>

					</article>

    			<?php endforeach; ?>

    			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>

			<div class="more module-more">

				<a href="/publications/books/">All Publications</a>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
