<?php  

include('connect.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "insert into mocktb(username,password)
    values('$username','$password')";

    $result = mysqli_query($conn,$sql);

    // if($result){
    // echo'stored data';
    // } else {
    // echo'error';
    // }

    header('location:read.php');

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>

    <!-- links -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<div class="container">

<h1>create page</h1>

<form method="post" >

  <div class="mb-3">
    <label >username</label>
    <input type="text" name="username" class="form-control" >
 </div>
  
  <div class="mb-3">
    <label >Password</label>
    <input type="password"  name="password" class="form-control" >
 </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
    
</body>
</html>