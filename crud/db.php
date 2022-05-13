<?php
$dsn = 'msql:host=localhost;dbname=company';
//Setting DSN(Data Source Name)
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = '';
$option = [];
try {
    //Creating PDO instance
    $connection =  new PDO($dsn, $username, $password, $option);
}
catch(PDOException $e){
    throw new PDOException(getMessage(), (int)$e->getCode());
}