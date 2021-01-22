<?php 

class Session {

    public function set($data) {
        $_SESSION = $data;
    }
    
    public function add( $name, $value) {
        $_SESSION[$name] = $value;
    }

    public function all() {
        return $_SESSION;
    }

    public function forget($name) {
        if( isset( $_SESSION[$name] ) ) unset( $_SESSION[$name] );
    }

    public function get( $name ) {
        return $_SESSION[$name] ?? '';
    }


    public function getFlash( $name ) {
        $data = '';

        if( isset( $_SESSION[$name] ) ) {

            $data = $_SESSION[$name];
            unset( $_SESSION[$name] );

        }

        return $data;
    }

    public function destroy() {
        session_destroy();
    }

}