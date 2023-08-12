<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sampleblog";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conn->connect_errno){
    echo "Failed to connect : ".$conn->connect_errno;
    exit();
}






?>