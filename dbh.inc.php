<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Miniproject";

$conn= mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if (!$conn){
    die("Conection failed: " .mysqli_connect_error());
}