<?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $msname =  $_POST['msname'];
                     $msprice =  $_POST['msprice'];
                     $msimg = $_POST['msimg'];



 if(empty($msname) || empty($msprice) || empty($msimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO mshoes(ms_name,ms_price,ms_img) VALUES('$msname','$msprice','$msimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addMen_shoes.php" method="POST">
         <label>product name:</label><br> <input type="text" name="msname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="msprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="msimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Men_shoes.php">Back to home</a></button>

</form>

</div>



</body>
</html>
