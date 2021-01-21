<?php 

class App {


    public function init( $current, $urls) {

        //var_dump( $urls );

        // Check bila routing ada
        if( in_array( $current, array_keys($urls) ) ) 
        {

            // ambil router
            
            // $urls['home'] -> HomeController@index
            $router = $urls[$current];

            
            // pisah controller dan method
            // $this->add('home', 'HomeController@index');
            
            $extract_router = explode('@', $router);
            $controller = $extract_router[0] ?? false;
            $method = $extract_router[1] ?? false;

            require_once 'app/controllers/' . $controller . '.php';

            $controller = new $controller;
            
            if( isset( $_GET['pagename'] ) )  unset( $_GET['pagename'] );

            $controller->{$method}(...array_values($_GET));


        }


    

    }

}