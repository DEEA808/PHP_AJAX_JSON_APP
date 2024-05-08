<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLS</title>
</head>
<body>
    <h2>URLS</h2>
    <table border=1>
        <tr>
            <td>#</td>
            <td>Url</td>
            <td>Description</td>
            <td>Category</td>
            <td>User</td>
        </tr>
        <?php 
          require 'config.php';
          $rows=mysqli_query($conn,"SELECT * FROM urls");
          $i=1;
        ?>
        <?php foreach($rows as $row): ?>
            <tr id=<?php echo $row["id"]; ?>>
                <td> <?php echo $i++; ?></td>
                <td><?php  echo $row["url"]; ?></td>
                <td><?php  echo $row["description"]; ?></td>
                <td><?php  echo $row["category"]; ?></td>
                <td><?php  echo $row["user_id"]; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button type="button" onClick="submitData(<?php echo $row['id']; ?>)">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="add.php">Add User</a> <br>
    <a href="index1.php">Ctegories</a>
    <?php require 'script.php'; ?>
</body>
</html>