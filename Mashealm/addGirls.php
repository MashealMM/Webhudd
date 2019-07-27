
<?php include('connect.php');?>
<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" type="text/css"   href="rec/css/css.css">          
</head>  
<body>

<div class="container">

 <?php
   if(isset($_POST['submit'])){
 $gname =  $_POST['gname'];
 $gprice =  $_POST['gprice'];
 $gimg = $_POST['gimg'];

 if(empty($gname) || empty($gprice) || empty($gimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";
}
 else{

$insert = " INSERT INTO girls(g_name,g_price,g_img) VALUES('$gname','$gprice','$gimg')";
 $inertok =  mysqli_query($conn_shop , $insert);
if($inertok){
echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";
 	  }
 	  }
      }
 	 	
 	 	?>
     
        <form action="addGirls.php" method="POST">
         <label>product name:</label><br> <input type="text" name="gname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="gprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="gimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Girls_clothes.php">Back to home</a></button>

</form>

</div>



</body>
</html>

