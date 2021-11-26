<?php

    class Database{
        const HOST = 'localhost';
        const USER = 'root';
        const PASSWORD = 'password';
        const DB = 'databaseName';

        public function getHost(){
            return self::HOST;
        }
    }
    echo "<br/>".Database::HOST;

    define("HOSTNAME", 'localhost_name');
    echo "<br/>" . HOSTNAME;


