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
        $this->loadComponent('KingLoui/BaseKitThemes.BaseKitThemes');
        $this->loadComponent('KingLoui/BaseKitThemeTwentySixteen.BaseKitThemeTwentySixteen');
    }

    public function beforeRender(Event $event) {

    	if (!isset($this->request->params['prefix']) || $this->request->params['prefix'] !== 'admin') {
    		//$this->viewBuilder()->layout('dark');
    	}
    }
}
