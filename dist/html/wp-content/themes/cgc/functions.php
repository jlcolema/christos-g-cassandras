<?php

	/*------------------------------------*\
	   Defaults
	\*------------------------------------*/

	// Sets up theme defaults and registers support for various WordPress features.

	// Note that this function is hooked into the after_setup_theme hook, which
	// runs before the init hook. The init hook is too late for some features, such
	// as indicating support for post thumbnails.

	function cgc_setup() {

		/* Let WordPress manage <title>
		--------------------------------------*/

		// By adding theme support, we declare that this theme does not use a
		// hard-coded <title> tag in the document head, and expect WordPress to
		// provide it for us.

		// add_theme_support( 'title-tag' );

		/* Image Sizes
		--------------------------------------*/

		// Note...

		// add_image_size( 'cgc-featured-image', 2000, 1200, true );

		// add_image_size( 'cgc-thumbnail-avatar', 100, 100, true );

		/* Menus
		--------------------------------------*/

		// This theme uses wp_nav_menu() in one location.

		register_nav_menus( array(

			'primary'    => __( 'Primary Navigation', 'cgc' ),

		) );

		/* HTML5
		--------------------------------------*/

		// Switch default core markup for search form, comment form, and comments
		// to output valid HTML5.

		add_theme_support( 'html5', array(

			'comment-form',
			'comment-list',
			'gallery',
			'caption',

		) );

		/* Editor Styles
		--------------------------------------*/

		// This theme styles the visual editor to resemble the theme style,
		// specifically font, colors, and column width.

		// add_editor_style( array( 'assets/css/editor-style.css', cgc_fonts_url() ) );

		add_editor_style( array( 'assets/css/editor.css' ) );

	}

	add_action( 'after_setup_theme', 'cgc_setup' );

	/*------------------------------------*\
	   Widgets
	\*------------------------------------*/

	// Register widget area.

	// Source: https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

	function cgc_widgets_init() {

		register_sidebar( array(

			'name'          => __( 'Sidebar', 'cgc' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'cgc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',

		) );

		register_sidebar( array(

			'name'          => __( 'Footer 1', 'cgc' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'cgc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',

		) );

	}

	/*------------------------------------*\
	   JavaScript Detection
	\*------------------------------------*/

	// Adds a `js` class to the root <html> element when JavaScript is detected.

	// function cgc_javascript_detection() {

		// echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";

	// }

	// add_action( 'wp_head', 'cgc_javascript_detection', 0 );


	add_action( 'widgets_init', 'cgc_widgets_init' );

	/*------------------------------------*\
	   Enqueue Scripts and Styles
	\*------------------------------------*/

	// Note...

	function cgc_scripts() {

		/* Styles
		--------------------------------------*/

		// Theme stylesheet.

		// wp_enqueue_style( 'cgc-style', get_stylesheet_uri() );

		// Screen styles

		// wp_enqueue_style( 'cgc-screen', get_theme_file_uri( '/assets/css/screen.css' ), array(), '1.0', 'all' );

		// Prints styles

		// wp_enqueue_style( 'cgc-print', get_theme_file_uri( '/assets/css/print.css' ), array(), '1.0', 'print' );

		/* Scripts
		--------------------------------------*/

		// jQuery

		// wp_deregister_script( 'jquery' );

		// wp_register_script( 'jquery', get_theme_file_uri( '' ), array(), '1.0', true );

		// wp_enqueue_script( 'jquery' );

		// Global Scripts

		// wp_enqueue_script( 'cgc-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

		// wp_enqueue_script( 'cgc-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

		// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

			// 	wp_enqueue_script( 'comment-reply' );

		// }

	}

	add_action( 'wp_enqueue_scripts', 'cgc_scripts' );

	/*------------------------------------*\
	   Title
	\*------------------------------------*/

	// Notes...

	/*------------------------------------*\
	   Support for SVG
	\*------------------------------------*/

	// Notes...

	function cc_mime_types( $mimes ) {

		$mimes['svg'] = 'image/svg+xml';

		return $mimes;

	}

	add_filter( 'upload_mimes', 'cc_mime_types' );

	/*------------------------------------*\
	   Deregister Features
	\*------------------------------------*/

	// Notes...

	function deregister_features() {

		/* Title
		--------------------------------------*/

		// Notes...

		wp_deregister_script( 'wp-embed' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		/* Title
		--------------------------------------*/

		// Notes...

		global $wp_widget_factory;

		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_generator' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wlwmanifest_link' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rsd_link' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

		remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'rel_canonical' );

		/* Title
		--------------------------------------*/

		// Notes...

		remove_action( 'wp_head', 'wp_resource_hints', 2 );

	}

	add_action( 'init', 'deregister_features' );

	/*------------------------------------*\
	   Contact Form 7
	\*------------------------------------*/

	// Disable initial loading of stylesheet and script.

	// add_filter( 'wpcf7_load_css', '__return_false' );

	// add_filter( 'wpcf7_load_js', '__return_false' );

	/*------------------------------------*\
	   Secondary Navigation
	\*------------------------------------*/

	// List items based on menu.

	// add hook

	add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );

	// filter_hook function to react on sub_menu flag

	function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {

		if ( isset( $args->sub_menu ) ) {

			$root_id = 0;

			// find the current menu item

			foreach ( $sorted_menu_items as $menu_item ) {

				if ( $menu_item->current ) {

					// set the root id based on whether the current menu item has a parent or not

					$root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;

					break;

				}

			}

			// find the top level parent

			if ( ! isset( $args->direct_parent ) ) {

				$prev_root_id = $root_id;

				while ( $prev_root_id != 0 ) {

					foreach ( $sorted_menu_items as $menu_item ) {

						if ( $menu_item->ID == $prev_root_id ) {

							$prev_root_id = $menu_item->menu_item_parent;

							// don't set the root_id to 0 if we've reached the top of the menu

							if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;

							break;

						}

					}

				}

			}

			$menu_item_parents = array();

			foreach ( $sorted_menu_items as $key => $item ) {

				// init menu_item_parents

				if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

				if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {

					// part of sub-tree: keep!

					$menu_item_parents[] = $item->ID;

				} else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {

					// not part of sub-tree: away with it!

					unset( $sorted_menu_items[$key] );

				}

			}

			return $sorted_menu_items;

		} else {

			return $sorted_menu_items;

		}

	}

	/*------------------------------------*\
	   Advanced Custom Fields
	\*------------------------------------*/

	// Notes...

	/* Options Page
	--------------------------------------*/

	if ( function_exists( 'acf_add_options_page' ) ) {

		acf_add_options_page(array(

			// 'page_title'	=> 'Theme General Settings',
			'menu_title'	=> 'Globals',
			'menu_slug'		=> 'globals',
			// 'capability'	=> 'edit_posts',
			// 'redirect'		=> false

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Banner',
			'menu_title'	=> 'Banner',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Welcome',
			'menu_title'	=> 'Welcome',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Contact Information',
			'menu_title'	=> 'Contact Information',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Education',
			'menu_title'	=> 'Education',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Affiliations',
			'menu_title'	=> 'Affiliations',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Positions',
			'menu_title'	=> 'Positions',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Curriculum Vitae',
			'menu_title'	=> 'Curriculum Vitae',
			'parent_slug'	=> 'globals'

		));

		acf_add_options_sub_page(array(

			'page_title'	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'parent_slug'	=> 'globals'

		));

	}
