<?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $wbname =  $_POST['wbname'];
                     $wbprice =  $_POST['wbprice'];
                     $wbimg = $_POST['wbimg'];



 if(empty($wbname) || empty($wbprice) || empty($wbimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO wbag(wb_name,wb_price,wb_img) VALUES('$wbname','$wbprice','$wbimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addwomen_bags.php" method="POST">
         <label>product name:</label><br> <input type="text" name="wbname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="wbprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="wbimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="women_bags.php">Back to home</a></button>

</form>

</div>



</body>
</html>