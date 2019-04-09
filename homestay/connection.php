<?php

$link = mysqli_connect('localhost', 'root', '');
if (!$link){
    die("Database Connection Failed" . mysqli_error($link));
}
$select_db = mysqli_select_db($link, 'homestay');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($select_db));
}


    $dbHost = "localhost";
    $dbDatabase = "homestay";
    $dbPasswrod = "";
    $dbUser = "root";
    $mysqli = new mysqli($dbHost, $dbUser, $dbPasswrod, $dbDatabase);


    $connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

//session_start();

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'homestay');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($select_db));
}

?>



