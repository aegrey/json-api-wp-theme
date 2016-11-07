<?php
//enter any custom data here
$data = [ 
	'site' => get_bloginfo('name'), 
	'error' => get_theme_mod('text_setting', 'No direct site access allowed'),
];

header('Content-Type: application/json');
echo json_encode($data);