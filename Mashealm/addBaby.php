
   <?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $Bname =  $_POST['Bname'];
                     $Bprice =  $_POST['Bprice'];
                     $Bimg = $_POST['Bimg'];



 if(empty($Bname) || empty($Bprice) || empty($Bimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO baby(B_name,B_price,B_img) VALUES('$Bname','$Bprice','$Bimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addBaby.php" method="POST">
         <label>product name:</label><br> <input type="text" name="Bname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="Bprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="Bimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Baby_clothes.php">Back to home</a></button>

</form>

</div>



</body>
</html>

