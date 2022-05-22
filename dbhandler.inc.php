<?php

$serverName = "localhost";
$dbuserName = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($serverName, $dbuserName, $dbPassword, $dbName);

if(!$conn){
    die("connection failed:". mysqli_connect_error());

}