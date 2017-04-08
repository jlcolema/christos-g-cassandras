<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta http-equiv="x-ua-compatible" content="ie=edge" />

	<title><?php if ( is_page( 'home' ) ) : ?>A very nice description<?php else : ?><?php the_title(); ?><?php endif; ?> &mdash; <?php bloginfo( 'name' ); ?></title>

	<meta name="description" content="" />

	<meta name="keywords" content="" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/favicon.png" />

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/assets/img/touch-icon.png" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/assets/css/print.css" rel="stylesheet" media="print" />

	<?php wp_head(); ?>

</head>

<body <?php body_class( 'loading' ); ?>>

	<div id="pre-header" class="pre-header">

		<div class="wrap">

			<div class="pre-header-site-title">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

					<?php bloginfo( 'name' ); ?>

				</a>

			</div>

			<?php /*

			<div class="logo u-logo">

				<?php get_template_part( 'inc/logo' ); ?>

			</div>

			*/ ?>

			<ul class="affiliations">

				<li class="u-url">

					<a href="#" rel="external">College of Engineering</a>

				</li>

				<li class="u-url">

					<a href="#" rel="external">Division of Systems Engineering</a>

				</li>

				<li class="u-url">

					<a href="#" rel="external">Center for Information &amp; Systems Engineering</a>

				</li>

			</ul>

		</div>

	</div>

	<header id="header" class="header" role="banner">

		<div class="wrap">

			<div class="banner">

				<?php /*

				<div class="site-title">

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

						<?php bloginfo( 'name' ); ?>

					</a>

				</div>

				*/ ?>

				<?php if ( is_page( 'home' ) ) : ?>

					<?php if ( have_rows( 'home_slideshow' ) ) : ?>

						<div class="flexslider banner-slideshow">

							<ul class="slides">

								<?php while( have_rows( 'home_slideshow' ) ) : the_row();

									// vars

									$home_slideshow_image = get_sub_field('home_slideshow_image');

									$home_slideshow_title = get_sub_field('home_slideshow_title');

								?>

									<li>

										<img data-src="holder.js/1020x300?theme=gray&outline=yes&auto=yes" alt="<?php echo $home_slideshow_image['alt'] ?>" />

										<?php /* <img src="<?php echo $home_slideshow_image['url']; ?>" alt="<?php echo $home_slideshow_image['alt'] ?>" /> */ ?>

										<div class="overlay">

											<div class="description"> <?php echo $home_slideshow_title; ?></div>

										</div>

									</li>

								<?php endwhile; ?>

							</ul>

						</div>

					<?php endif; ?>

				<?php else : ?>

					<?php /*

					<div class="banner-photo">

						<img data-src="holder.js/75x100?theme=gray&text=Photo&outline=yes&auto=yes" alt="A very nice description" />

					</div>

					*/ ?>

					<div class="banner-image">

						<img data-src="holder.js/1020x100?theme=gray&outline=yes&auto=yes" alt="A very nice description" />

					</div>

				<?php endif; ?>

			</div>

			<nav class="nav primary-navigation" role="navigation">

				<div class="toggle">

					<span>Menu</span>

				</div>

				<?php

					wp_nav_menu( array(

						// 'menu'				=> '',
						'menu_class'		=> '',
						// 'menu_id'			=> '',
						'container'			=> '',
						// 'container_class'	=> '',
						// 'container_id'		=> '',
						// 'fallback_cb'		=> '',
						// 'before'			=> '',
						// 'after'			=> '',
						// 'link_before'		=> '',
						// 'link_after'			=> '',
						// 'echo'				=> true,
						'depth'				=> 1,
						// 'walker'			=> '',
						'theme_location'	=> 'primary',
						'items_wrap'		=> '<ul class="%2$s">%3$s</ul>',
						// 'item_spacing'	=> 'preserve',

					));

				?>

				<form role="search" method="get" class="search global-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

					<label for="search">Search</label>

					<div class="">

						<input type="search" name="search" id="search" class="" placeholder="Search" />

						<button type="submit">Search</button>

					</div>

				</form>

			</nav>

		</div>

	</header>

	<main id="content" class="content" role="main">

		<div class="wrap">

			<?php if ( ! is_page( 'home' ) ) : ?>

				<div class="section">

					<h1 class="section-title">

						Section Title

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

							Return to Home <span class="arrow">&#8617;&#xFE0e;</span>

						</a>

					</h1>

					<?php if ( ! is_home() ) : ?>

						<nav class="nav secondary-navigation" role="navigation">

							<div class="nav-inner-wrap">

								<?php

									wp_nav_menu( array(

										// 'menu'				=> '',
										'menu_class'		=> '',
										// 'menu_id'			=> '',
										'container'			=> '',
										// 'container_class'	=> '',
										// 'container_id'		=> '',
										// 'fallback_cb'		=> '',
										// 'before'			=> '',
										// 'after'			=> '',
										// 'link_before'		=> '',
										// 'link_after'			=> '',
										// 'echo'				=> true,
										// 'depth'				=> 1,
										// 'walker'			=> '',
										'theme_location'	=> 'primary',
										'items_wrap'		=> '<ul class="%2$s">%3$s</ul>',
										// 'item_spacing'	=> 'preserve',
										'sub_menu'			=> true,

									));

								?>

							</div>

						</nav>

					<?php endif; ?>

				</div>

			<?php endif; ?>

			<div class="primary">
