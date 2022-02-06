<?php

function twentytwenty_register_my_cpts() {

	/**
	 * Post Type: Employee.
	 */
	$cpt_args = [
		"label" => __( "Employee", "twentytwenty" ),
		"labels" => [ 	
						"name" => __( "Employee", "twentytwenty" ),
						"singular_name" => __( "Employee", "twentytwenty" ),
						],
		"public" => true,
		"show_ui" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
	];
	register_post_type( "employee", $cpt_args );

	/**
	 * Taxonomy: Employee Categories.
	*/
	register_taxonomy( 'employee_category', 
    	array('employee'), 
    	array(		
    		'public' => false,            
    		'labels' => array(
    			'name' => __( 'Employee Categories', 'twentytwenty' ),
    			"add_new_item" => __( "Add New Category", "twentytwenty" ),
    			'singular_name' => __( 'Employee Category', 'twentytwenty' ),
    		),
    		'show_ui' => true,
    	)
    ); 
}

add_action( 'init', 'twentytwenty_register_my_cpts' );
