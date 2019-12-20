<?php

$host = 'localhost';
$username = 'root';
$password = 'PinkyLu2$hop';
$db_name = 'pembayaran';

$con = new mysqli($host,$username,$password,$db_name);

if( !$con ){
    die("Database Not Found!");
}

?>
