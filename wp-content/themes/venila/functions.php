<?php 
add_theme_support( 'menus' );
add_theme_support( 'custom-logo' ); 
add_theme_support( 'post-thumbnails', array( 'post', 'page','vacancies' ) ); 
//set_post_thumbnail_size(396,360,false);
//add_image_size('post_thumb',396,360,false);
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
register_sidebar(
		array(
			'id' => 'news',
			'name' => __( 'News' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
register_sidebar(
		array(
			'id' => 'blogpage',
			'name' => __( 'BlogPage' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

register_sidebar(
		array(
			'id' => 'newspage',
			'name' => __( 'NewsPage' ),
			'description' => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);


}

// Remove HT Mega Image sizes 
add_action('init', 'remove_plugin_image_sizes'); function remove_plugin_image_sizes() { remove_image_size('htmega_size_585x295'); remove_image_size('htmega_size_1170x536'); remove_image_size('htmega_size_396x360'); }
function set_posts_per_page_for_successstories( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_category('successstories') ) {
	$query->set( 'posts_per_page', '3' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_successstories' );




?>