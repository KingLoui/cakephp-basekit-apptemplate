<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
  'BaseKit' => [
	'Themes' => [
		'ThemeDefault' => 'KingLoui/BaseKitThemeSmarty',
		'ThemePrefix' => [
			'admin' => 'KingLoui/BaseKitThemeInspinia'
		],
		'LayoutDefault' => 'demo/dark',
		'LayoutPrefix' => [
			'admin' => 'default'
		]	
	],
  ]
];
return $config;
