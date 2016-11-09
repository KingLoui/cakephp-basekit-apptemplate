<?php

use Cake\Core\Configure;

$config = [
	'BaseKitThemes' => [
		'ThemeAdmin' => 'KingLoui/BaseKitThemeTwentySixteen',
		'ThemeDefault' => 'KingLoui/BaseKitThemeTwentySixteen',
		'LayoutAdmin' => 'admin',
		//'LayoutDefault' => 'demo/dark'		
	],
	'BaseKitThemeTwentySixteen' => [
		'NavSidebar' => [
			'HeaderLogo' => 'MH'
		]
	]
	
];

return $config;