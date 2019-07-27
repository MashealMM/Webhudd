<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css"   href="../rec/css/css.css">
          
</head> 
<?php
include('connect.php');
     $id=$_GET['id'];

    $proname  = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $proimg = $_POST['proimg'];
   $sql = "UPDATE products SET 
               pro_name='$proname' ,
               pro_price='$proprice' ,
               pro_img='$proimg'
                WHERE pro_id='$id' ";

 $upadted = mysqli_query($conn_shop,$sql);

  if($upadted){

 	  	echo "<div style='color:white;width:200px;background:green;'>Updated successfully</div>";
}      
  
?>
<button><a href="index.php">Back to home</a></button>
