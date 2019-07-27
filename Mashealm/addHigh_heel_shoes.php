<?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $sname =  $_POST['sname'];
                     $sprice =  $_POST['sprice'];
                     $simg = $_POST['simg'];



 if(empty($sname) || empty($sprice) || empty($simg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO shoes(s_name,s_price,s_img) VALUES('$sname','$sprice','$simg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addHigh_heel_shoes.php" method="POST">
         <label>product name:</label><br> <input type="text" name="sname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="sprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="simg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="High_heel_shoes.php">Back to home</a></button>

</form>

</div>



</body>
</html>
