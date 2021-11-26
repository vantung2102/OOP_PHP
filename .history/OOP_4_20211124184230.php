<?php

    class Database{
        const HOST = 'localhost';
        const USER = 'root';
        const PASSWORD = 'password';
        const DB = 'databaseName';

        public function getHost(){
            return self::HOST . __METHOD__;
        }
    }
    echo "<br/>".Database::HOST;
    $db = new Database();
    echo "<br/>" . $db->getHost();

    define("HOSTNAME", 'localhost_name');
    echo "<br/>" . HOSTNAME;


