<?php

//enable menu appearance in wp admin side for this site
if(!function_exists('ja_register_nav_menus')):
	function ja_register_nav_menus() {
	    register_nav_menus(
	        array(
	            'primary_navigation' => 'Primary Navigation',
	            'footer_navigation' => 'Footer Navigation'
	        )
	    );
	}
	add_action( 'after_setup_theme', 'ja_register_nav_menus' );
endif;


/*
	custom theme setup
*/
if(!function_exists('ja_theme_setup')):
	function ja_theme_setup(){
		
		add_theme_support( 'menus' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//title
		add_theme_support('title-tag');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		//for the featured image (post and pages)
		add_theme_support( 'post-thumbnails'); // Add it for posts
		set_post_thumbnail_size( 825, 510, true );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

	}

	add_action('after_setup_theme','ja_theme_setup' );
endif;

/*
	Post type for the tutorials
*/

if(!function_exists('ja_tutorials_init')):
	function ja_tutorials_init(){

		$args_level = array(
			'name' => __('Tutorials','post type general name'), 
			'singular_name'=> __('Tutorial','post type singular name'), 
			'all_items'=> __('All Tutorials'),
			'add_new'=> __('Add new Tutorial','tutorial'),
			'add_new_item'=> __('Add new tutorial'),
			'edit_item'=> __('Edit tutorial'),
			'new_item'=> __('New tutorial'),
			'view_item'=> __('View tutorials'),
			'search_item'=> __('Search in tutorials'),
			'not_found'=> __('No tutorials found'),
			'not_found_in_trash'=> __('No tutorials found in trash'),
			'parent_item_colon'=>''
		);
		$args = array(
			'labels' => $args_level,
			'public'=> true,
			'publicly_queryable'=> true,
			'show_ui'=> true,
			'query_var'=> true,
			'rewrite'=> true,
			'capability_type'=> 'post',
			'hierarchical'=> false,
			'menu_position'=> 5,
			'supports'=> array('title','editor','comments')
		);
		register_post_type('tutorials',$args);
	}
	add_action('init','ja_tutorials_init');
endif;

/*
	Parent then child under
*/

if(!function_exists('ja_ist_child_pages')):

	function ja_list_child_pages(){
		global $posts;
		$string ="";
		
		$pages = get_pages( 'child_of'.$posts[0]->ID.'sort_column=name&sort_order=desc' );
		$count = 0;
		foreach ($pages as $page) {
			$content = $page->post_content;
			if(!$content)
				continue;
			if($count >= 2)
				break;
			$count++;

			$string .='<h2> '. $page->post_title.' </h2>';
			$string .=  $page->post_content;

		}



		return $string;
	}

	add_shortcode('jaChildPages','ja_list_child_pages' );
endif;

