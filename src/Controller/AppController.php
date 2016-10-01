<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('KingLoui/BaseKit.BaseKit');
        $this->loadComponent('KingLoui/BaseKitUsers.BaseKitUsers');
        // $this->loadComponent('Auth', [
        //     'authorize' => ['Controller'],
        //     'loginRedirect' => '/admin',
        //     'logoutRedirect' => [
        //         'prefix' => false,
        //         'plugin' => false,
        //         'controller' => 'Users',
        //         'action' => 'login'
        //     ],
        //     'unauthorizedRedirect' => false
        // ]);
    }
}
