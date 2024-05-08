<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Url</title>
</head>
<body>
<h1>Edit Url</h1>
<form autocomplete="off" action="" method="post">
  <?php 
  require 'config.php';
  $id=$_GET["id"];
  $rows=mysqli_fetch_assoc(mysqli_query($conn,"SELECT* FROM urls WHERE id=$id"))
  ?>  
  <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
  <label for="">Url</label>
    <input type="text" id="url" value="<?php echo $rows['url']; ?>"> <br>
    <label for="">Description</label>
    <input type="text" id="description" value="<?php echo $rows['description']; ?>"> <br>
    <label for="">Category</label>
    <input type="text" id="category" value="<?php echo $rows['category']; ?>"> <br>
    <label for="">User</label>
    <input type="text" id="user_id" value="<?php echo $rows['user_id']; ?>"> <br>
    <button type="button" onClick="submitData('edit');">Edit</button>
</form>
<br>
<a href="index.php">Go to index</a>
 <?php require 'script.php'; ?>
</body>
</html>