<?php

require_once "env.php";

if(ENVIRONMENT == 'dev'){

    define("BASE_ULR", "http://localhost/mini-framework/");

    $config['host'] = '127.0.0.1';
    $config['dbname'] = 'prova-senai';
    $config['user'] = 'postgres';
    $config['pass'] = 'postgres';

} else {

    define("BASE_ULR", "http://localhost/mini-framework/");

    $config['host'] = '127.0.0.1';
    $config['dbname'] = 'prova-senai';
    $config['user'] = 'postgres';
    $config['pass'] = 'postgres';
}

global $db;

try{

    $db = new PDO("pgsql:host=" . $config['host'] . " dbname=" . $config['dbname'] . " user=" . $config['user'] . " password=" . $config['pass']);
} catch (PDOException $exception){

    echo $exception->getMessage() . $exception->getCode();

}