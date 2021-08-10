<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "LoginSystem";

$conn = mysqli_connect($dBName, $serverName, $dBUsername, $dBPassword);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}