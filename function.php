<?php 
 require 'config.php';
 if(isset($_POST["action"])){
    if($_POST["action"]=="insert"){
        insert();
    }
    else if($_POST["action"]=="edit"){
      edit();
    }
    else{
      delete();
    }
 }
 function insert(){
    global $conn;
    $url=$_POST["url"];
    $description=$_POST["description"];
    $category=$_POST["category"];
    $user_id=$_POST["user_id"];
    $query="INSERT INTO urls VALUES('','$url','$description','$category','$user_id')";
    mysqli_query($conn,$query);
    echo "Inserted successfully";
 }

 function edit(){
   global $conn;
    
   $id=$_POST["id"];
   $url=$_POST["url"];
   $description=$_POST["description"];
   $category=$_POST["category"];
   $user_id=$_POST["user_id"];

   $query ="UPDATE urls SET url='$url',description='$description',category='$category',user_id='$user_id' WHERE id=$id ";
   mysqli_query($conn,$query); 
   echo "Updated successfully";
}

function delete(){
   global $conn;
    
   $id=$_POST["action"];

   $query ="DELETE FROM urls WHERE id=$id ";
   mysqli_query($conn,$query); 
   echo "Deleted successfully";
}
?>
