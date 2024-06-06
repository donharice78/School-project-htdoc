<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

// try {
//     $database=new PDO("mysql:host=" .$host.";dbname=".$dbname, $username, $password );

// } catch (PDOException $erreur) {
//    echo $erreur->getMessage();
//    exit(); 


//  }

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_error) {
    die("connection error:" . $mysqli->connect_error);
}

return $mysqli;

// if ($con) {
//     echo 'connected';
//   } else {
//     echo 'not connected';
//   }