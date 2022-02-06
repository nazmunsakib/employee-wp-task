<?php
if( function_exists('acf_add_local_field_group') ):
	
acf_add_local_field_group(array(
	'key' => 'group_61ffabd74d40f',
	'title' => 'Employee Post Meta',
	'fields' => array(
		array(
			'key' => 'field_61ffac00ae248',
			'label' => 'Employee designation',
			'name' => 'employee_designation',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Web Developer',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'employee',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		