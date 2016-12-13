<?php

use Cake\Core\Configure;

$config = [
	'BaseKitThemes' => [
		'ThemeAdmin' => 'KingLoui/BaseKitThemeInspinia',
		'ThemeDefault' => 'KingLoui/BaseKitThemeSmarty',
		'LayoutAdmin' => 'admin',
		//'LayoutDefault' => 'demo/dark'		
	],
	'BaseKitThemeInspinia' => [
		'Skin' => 7,
		'Sidebar' => [
			'ShowThemeExamples' => true,
			'ShowThemeSettings' => true,
			'HeaderLogo' => 'MH',
			'Fixed' => true,
			'ShowHideEffect' => 'reveal'
		],
		'NavTop' => [
			'Fixed' => true,
			'FixedFullWidth' => false
		]
	]
	
];

return $config;