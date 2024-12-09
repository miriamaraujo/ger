<?php

$servername = "#";
$dbusername = "#";
$dbpassword = "";
$dbName = "gers_garage";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbName);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}
