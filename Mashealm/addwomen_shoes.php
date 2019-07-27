<?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $wsname =  $_POST['wsname'];
                     $wsprice =  $_POST['wsprice'];
                     $wsimg = $_POST['wsimg'];



 if(empty($wsname) || empty($wsprice) || empty($wsimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO wshoes(ws_name,ws_price,ws_img) VALUES('$wsname','$wsprice','$wsimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addwomen_shoes.php" method="POST">
         <label>product name:</label><br> <input type="text" name="wsname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="wsprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="wsimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="women_shoes.php">Back to home</a></button>

</form>

</div>



</body>
</html>
