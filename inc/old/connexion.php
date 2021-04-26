<?php


    
$sdn = 'mysql:host=' .$host. ';dbname=' .$dbname;
$pdo= new PDO($sdn, $login, $pwd,[
    
    
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
