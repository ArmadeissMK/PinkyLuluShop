<?php

$host = "localhost";
$username = "root";
$password = "PinkyLu2$hop";
$db_name = "pembelian";

$conn = new mysqli($host,$username,$password,$db_name);

if( !$conn ){
    die("Database Not Found!");
}

?>
