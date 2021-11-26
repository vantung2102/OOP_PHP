<?php

    class Database{
        const HOST = 'localhost';
        const USER = 'root';
        const PASSWORD = 'password';
        const DB = 'databaseName';

        public function getHost(){
        // cách truy cập trong class
            return self::HOST . __METHOD__;
        }
    }

    // cách truy cập ngoài class
    echo "<br/>".Database::HOST;
    $db = new Database();
    echo "<br/>" . $db->getHost();

    define("HOSTNAME", 'localhost_name');
    echo "<br/>" . HOSTNAME;


