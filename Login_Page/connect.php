<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'signup';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_error){
    echo 'ERROR';
}
?>