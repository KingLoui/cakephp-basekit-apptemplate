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
		'Admin' => [
			'Skin' => 7,
			'Sidebar' => [
				'ShowThemeExamples' => true,
				'ShowThemeSettings' => true,
				'HeaderLogo' => 'MH',
				'Collapse' => false,
				'Fixed' => true,
				'ShowHideEffect' => 'reveal'
			],
			'NavTop' => [
				'Fixed' => true,
				'FixedFullWidth' => false
			]
		],
		'Default' => [
		
		]
	]
	
];

return $config;