<?php   
include('connect.php');

$sql = "SELECT * FROM mocktb";
$result= mysqli_query($conn,$sql); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

<div class="container">

<h1>Read Page</h1>
<br>

<button style="float: right;"  ><a href="create.php" >Create New User</a></button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>

<?php
if(mysqli_num_rows($result)>0) {
   
    
    while($row = mysqli_fetch_assoc($result)) {
   

?>


<tr>
    
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><button><a href="update.php?updateId=<?php echo $row['id'] ?>">update</a></button>
        <button><a href="delete.php?deleteId=<?php echo $row['id'] ?>">delete</a></button></td>
</tr>

<?php 

    }
}
?>
    
  </tbody>
</table>



</div>
    
</body>
</html>