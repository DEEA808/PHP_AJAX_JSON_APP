<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Url</title>
</head>
<body>
<h1>Add Url</h1>
<form autocomplete="off" action="" method="post">
    <label for="">Url</label>
    <input type="text" id="url" value=> <br>
    <label for="">Description</label>
    <input type="text" id="decription" value=> <br>
    <label for="">Category</label>
    <input type="text" id="category" value=> <br>
    <label for="">User</label>
    <input type="text" id="user_id" value=> <br>
    <button type="button" onClick="submitData('insert');">Insert</button>
</form>
<br>
<a href="index.php">Go to urls</a>
 <?php require 'script.php'; ?>
</body>
</html>