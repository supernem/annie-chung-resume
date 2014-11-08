<?php

// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

// mon premier menu
function register_my_menus() {
  register_nav_menus (
    array(
    'secondary-nav' => 'Secondary Menu',
    'third-nav' => 'Third Menu',
    )
  );
}

require_once('wp_bootstrap_navwalker.php');
add_action( 'init', 'register_my_menus' );




function my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );




add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );

function add_search_box( $items, $args ) {
    $items .= '<li>' . get_search_form( false ) . '</li>';
    return $items;
}