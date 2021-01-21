<?php 

class Database 
{

    private $host;
    private $username;
    private $userpass;
    private $dbname;


    public function setSettings($host, $username, $userpass, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->userpass = $userpass;
        $this->dbname = $dbname;
    }

    public function connect() {
        $mysqli = new mysqli( $this->host, $this->username, $this->userpass, $this->dbname);

        //var_dump($mysqli);

        return $mysqli;
    }


}