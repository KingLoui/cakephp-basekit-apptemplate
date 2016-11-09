<?php

require __DIR__ . '/paths.php';
require CORE_PATH . 'config' . DS . 'bootstrap.php';

use Cake\Cache\Cache;
use Cake\Console\ConsoleErrorHandler;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;
use Cake\Core\Plugin;
use Cake\Database\Type;
use Cake\Datasource\ConnectionManager;
use Cake\Error\ErrorHandler;
use Cake\Log\Log;
use Cake\Mailer\Email;
use Cake\Network\Request;
use Cake\Utility\Inflector;
use Cake\Utility\Security;

try {
    Configure::config('default', new PhpConfig());
    Configure::load('app', 'default', false);
} catch (\Exception $e) {
    exit($e->getMessage() . "\n");
}

if (!Configure::read('debug')) {
    Configure::write('Cache._cake_model_.duration', '+1 years');
    Configure::write('Cache._cake_core_.duration', '+1 years');
}

date_default_timezone_set('Europe/Berlin');

mb_internal_encoding(Configure::read('App.encoding'));

ini_set('intl.default_locale', Configure::read('App.defaultLocale'));

$isCli = PHP_SAPI === 'cli';
if ($isCli) {
    (new ConsoleErrorHandler(Configure::read('Error')))->register();
} else {
    (new ErrorHandler(Configure::read('Error')))->register();
}

if ($isCli) {
    require __DIR__ . '/bootstrap_cli.php';
}

if (!Configure::read('App.fullBaseUrl')) {
    $s = null;
    if (env('HTTPS')) {
        $s = 's';
    }

    $httpHost = env('HTTP_HOST');
    if (isset($httpHost)) {
        Configure::write('App.fullBaseUrl', 'http' . $s . '://' . $httpHost);
    }
    unset($httpHost, $s);
}

Cache::config(Configure::consume('Cache'));
ConnectionManager::config(Configure::consume('Datasources'));
Email::configTransport(Configure::consume('EmailTransport'));
Email::config(Configure::consume('Email'));
Log::config(Configure::consume('Log'));
Security::salt(Configure::consume('Security.salt'));

Request::addDetector('mobile', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isMobile();
});
Request::addDetector('tablet', function ($request) {
    $detector = new \Detection\MobileDetect();

    return $detector->isTablet();
});

Type::build('time')
    ->useImmutable();
Type::build('date')
    ->useImmutable();
Type::build('datetime')
    ->useImmutable();

/*
 * My Settings
 */

if (Configure::read('debug')) {
    Plugin::load('DebugKit', ['bootstrap' => true]);
}
Plugin::load('Migrations');

// Load BaseKit
Plugin::load('KingLoui/BaseKit', ['bootstrap' => true, 'routes' => true]);
Configure::load('basekit/basekit');

// Load Theme
Plugin::load('KingLoui/BaseKitThemeTwentySixteen', ['bootstrap' => true, 'routes' => false]);
Configure::load('basekit/themes');

// Load Child Theme
Plugin::load('ChildTheme', ['bootstrap' => false, 'routes' => true]);

// DB Configuration tests
/*
Configure::write('BaseKit.site_name', 'My Personal Blog', 'BaseKit');
Configure::dump('BaseKit', 'BaseKit', ['BaseKit']);
Configure::dump('BaseKitThemeTwentySixteen', 'BaseKit', ['BaseKitThemeTwentySixteen']);
debug(Configure::read('BaseKit', 'BaseKit'));
*/
