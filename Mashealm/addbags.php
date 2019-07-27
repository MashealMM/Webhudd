
   <?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $bname =  $_POST['bname'];
                     $bprice =  $_POST['bprice'];
                     $bimg = $_POST['bimg'];



 if(empty($bname) || empty($bprice) || empty($bimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO `bags` (b_name,b_price,b_img)VALUES('$bname','$bprice','$bimg') ";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addbags.php" method="POST">
         <label>product name:</label><br> <input type="text" name="bname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="bprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="bimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Bags.php">Back to home</a></button>

</form>

</div>



</body>
</html>

