<?php 

session_start();

require_once 'core/Database.php';
require_once 'core/Router.php';
require_once 'core/App.php';
require_once 'core/Request.php';
require_once 'core/Session.php';
require_once 'core/Model.php';

$router = new Router();

$pagename = $_GET['pagename'] ?? false;

require_once 'general.php';

$app = new App();
$app->init( $pagename, $router->getRoutes() );
