<?php 

function db() {
    return Database::connect();
}

function view( $name, $data = []) {
    extract( $data );
    require_once 'resource/views/' . $name . '.php';
}

function base_url( $name = '') {
    return 'http://apd.test/' . $name;
}

function request() {
    return new Request();
}

function session() {
    return new Session();
}

function model( $name ) {

    require_once 'app/models/' . $name . '.php';
    return new $name;

}