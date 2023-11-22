<?php
include('connect.php');

session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>


<body class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand mx-5" href="#">Welcome</a>
  
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-item nav-link" href="#">home</a>
      <a class="nav-item nav-link" href="#">about</a>
      <a class="nav-item nav-link" href="#">services</a>
      <a class="nav-item nav-link " href="logout.php">log out</a>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-4 m-auto my-5">
        <h1>HELLO, user : </h1>
        <h3><?php echo $_SESSION['email'] ?></h3>
        </div>
    </div>
</div>



    <div>
        
    </div>

    
</body>
</html>