<?php 
include ('connect.php');

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    $sql = "UPDATE mocktb SET username='$username', password='$password' Where id=$id";
   
    $result = mysqli_query($conn,$sql);

    header('location:read.php');


?>