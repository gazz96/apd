<?php 

class Database 
{

    private static $host;
    private static $username;
    private static $userpass;
    private static $dbname;

    private static $instance  =false ;


    public static function setSettings($host, $username, $userpass, $dbname) {
        self::$host = $host;
        self::$username = $username;
        self::$userpass = $userpass;
        self::$dbname = $dbname;
    }

    public static function connect() {
        if( ! self::$instance ) self::$instance= new mysqli( self::$host, self::$username, self::$userpass, self::$dbname);

        //var_dump($mysqli);

        return self::$instance;
    }


}