

<?php  

include('connect.php');

    $id = $_GET['updateId'];

    $sql = "SELECT * FROM mocktb where id= {$id}";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        while( $row = mysqli_fetch_assoc($result)) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

    <!-- links -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<div class="container">

<h1>update page</h1>

<form method="post" action="updatedata.php">

    
  <div class="mb-3">
    <label >id</label>
    <input readonly name="id" class="form-control" value="<?php echo $row['id'] ?>" >
 </div>

  <div class="mb-3">
    <label >username</label>
    <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" >
 </div>
  
  <div class="mb-3">
    <label >Password</label>
    <input type="password"  name="password" class="form-control" value="<?php echo $row['password'] ?>" >
 </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">update</button>
</form>

</div>

<?php
      }
    }
?>


    
</body>
</html>