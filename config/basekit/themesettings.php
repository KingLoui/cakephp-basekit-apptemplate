<?php

use Cake\Core\Configure;

$config = [
	'BaseKitThemeInspinia' => [
		//'Skin' => 7,
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