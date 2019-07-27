
   <?php    include('connect.php');
   include('head.php');
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


$proname =$_POST["proname"];
$proprice =$_POST['proprice'];
$proimg =$_POST["pro_img"];



 if (empty($proname) ||empty($proprice) || empty($proimg)  ){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = "INSERT INTO products(pro_name,pro_price,pro_img)VALUES('$proname','$proprice','$proimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 	 
 	 	<form action="addpro.php" method="post">
 	 	 <label>product name:</label><br> <input type="text" name="proname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="proprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="pro_img"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="index.php">Back to home</a></button>

</form>

</div>



</body>
</html>

