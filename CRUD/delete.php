<?php 

include('connect.php');

 $id = $_GET['deleteId'];

  $sql = "DELETE from mocktb Where id= $id";
  $result = mysqli_query($conn,$sql);

  header('location:read.php');

?>