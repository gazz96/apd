<?php 


class Router {

    private $routes = [];

    
    public function __construct()
    {
        require 'app/config/routes.php';
    }
    

    public function add( $url, $action ) {
        $this->routes[$url] = $action;
    }

    public function resource( $url, $action ) {

        foreach([ 'index', 'create', 'store', 'edit', 'delete', 'update'] as $method) {
            $this->routes[$url.'-' .$method] = $action .'@'.$method;
        }

    }

    public function getRoutes() {
        return $this->routes;
    }

}