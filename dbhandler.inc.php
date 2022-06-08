<?php

$serverName = "localhost";
$dbuserName = "Gashman";
$dbPassword = "Tochukwu878";
$dbName = "wisetechglobal";

$conn = mysqli_connect($serverName, $dbuserName, $dbPassword, $dbName);

if(!$conn){
    die("connection failed:". mysqli_connect_error());

}