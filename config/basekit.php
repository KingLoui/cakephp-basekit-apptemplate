<?php

use Cake\Core\Configure;
use Cake\Routing\Router;

$config = [
  'BaseKit' => [
      'NavSidebar' => [
        'HeaderElement' => 'adminbar',
        'HeaderLogo' => 'MH',
        'ShowThemeExamples' => true,
        'ShowThemeSettings' => true,
        'MenuItems' => [
					'Users' => [
							['uri' => '#', 'extras' => ['icon' => 'fa fa-user']],
							'List Users' => ['uri' => ['plugin' => false,'controller' => 'Users', 'action' => 'index']],
							'Add User' => ['uri' => ['plugin' => false,'controller' => 'Users', 'action' => 'add']]
					],
		    ]
      ]
  ]
];
return $config;
