<?php
include('connect.php');

if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    $sql = "SELECT * FROM signuptb WHERE email='$email' and password='$password' and age='$age'";
    $result = mysqli_query($conn,$sql);

    if($result){
        $num= mysqli_num_rows($result);
        if($num>0){
            session_start();
            $_SESSION['email'] = $email;
            header("location:welcome.php");
        } else {
            echo '<h2 style="color:red; "> PLEASE ENTER CORRECT INFORMATION!!! </h2>';
        }
    } 
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="container">

<h1 class="my-5">Login Page</h1>

<form method="post">

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
 </div>

  <div class="mb-3">
    <label class="form-label">password</label>
    <input type="password" class="form-control" name="password">
 </div>

  <div class="mb-3">
    <label class="form-label">age</label>
    <input type="number" class="form-control" name="age">
 </div>
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label" >Logged me In</label>
  </div> -->

  <button type="submit" name="submit" class="btn btn-primary">login</button>

  <button ><a text_ href="signup.php">sign up</a></button>
</form>
    
</body>
</html>

