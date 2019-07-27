<?php

include('connect.php');

?>
<!DOCTYPE HTML>  
<html>
<head>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">
</head>
<body>


<div class="container">
<?php



   if(isset($_POST['submit'])){
$hname =  $_POST['hname'];
$hprice =  $_POST['hprice'];
$himg = $_POST['h_img'];

 if(empty($hname) || empty($hprice) || empty($himg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";
 }else{
 	$insert = " INSERT INTO houres(h_name,h_price,h_img) VALUES('$hname','$hprice','$himg')";
 	$inertok =  mysqli_query($conn_shop , $insert);
 	  if($inertok){
 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";
 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 	 
 	 	<form action="addhours.php" method="POST">
 	 	 <label>Hour name:</label><br> <input type="text" name="hname"  placeholder="Your product name.."><br><br>
 <label>Hour price :</label><br> <input type="text" name="hprice"  placeholder="product price .."><br><br>
 <label>Hour img:</label> <br><input type="text" name="h_img"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Hours.php">Back to home</a></button>

</form>

</div>



</body>
</html>

