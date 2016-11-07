<?php

add_action('after_setup_theme', 'apitheme_setup');

function apitheme_setup() {

	// add any custom responses here & update in theme customizations
	add_action('customize_register', 'apitheme_customize_register');
	function apitheme_customize_register($wp_customize) {
		//custom section
		$wp_customize->add_section('apitheme_responses_section' , array(
    		'title' => __('Custom Responses', 'apitheme'),
    		'priority' => 0,
		));

		//add setting
		$wp_customize->add_setting('text_setting' , array(
    		'default' => 'No direct site access allowed',
		));

		//add control
		$wp_customize->add_control('text_setting', array(
			'label' => __('Error Message', 'apitheme'),
			'section' => 'apitheme_responses_section',
			'type' => 'text',
		));
	}
}