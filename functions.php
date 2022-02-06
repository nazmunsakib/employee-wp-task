<?php

require_once get_theme_file_path('/inc/custom-post-type.php');
require_once get_theme_file_path('/inc/metabox.php');

function twenty_twenty_child_style() {

	wp_enqueue_style( 'bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );

	wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_child_style' );


//Display Employee nabigation
function employee_nabigation(){
    global $employee_query;
    echo  paginate_links( 
        array(
          'mid_size' => 3,
          'type' => 'list',
          'next_text' => '»',
          'prev_text' => '«',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $employee_query->max_num_pages
        ) 
      );
}

//Display Employee Category name
function employee_taxonomy_name($tax_name){
  global $post;
    $terms = get_the_terms($post->ID, $tax_name);
    if ($terms && ! is_wp_error($terms)) :
        $tax_arr = array();
        foreach ($terms as $term) {
            $tax_arr[] = $term->name;
        }
        $terms_name = join( " ", $tax_arr);
    endif;
        
    if (!empty($terms_name)) {
      echo $terms_name;
    }
}


                      