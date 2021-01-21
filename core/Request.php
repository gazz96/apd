<?php 

class Request
{

    private $request;

    public function __construct() {
        $this->request = $_POST + $_GET;
    }

    public function input( $name, $default = '' ) {
        return $this->request[$name] ?? $default;
    }

    public function all() {
        return $this->request;
    }

    public function only( $excepts  = []) {

        $temp = [];
        foreach( $excepts as $except ) {
            if( isset( $this->request[$except] ) ) {
                $temp[$except] = $this->request[$except];
            }
        }

        return $temp;

    }

}