<?php   

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mocktest';


// $conn = new mysqli('localhost','root','','mocktest');

$conn = new mysqli($hostname,$username,$password,$dbname);

if ($conn->connect_error) {
    echo 'connection failed';
}




?>