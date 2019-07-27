<?php    include('connect.php');
   include('head.php');
 ?>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">

<body>

<div class="container">
<?php



   if(isset($_POST['submit'])){


                     $mname =  $_POST['mname'];
                     $mprice =  $_POST['mprice'];
                     $mimg = $_POST['mimg'];



 if(empty($mname) || empty($mprice) || empty($mimg)){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

 	$insert = " INSERT INTO man(m_name,m_price,m_img) VALUES('$mname','$mprice','$mimg')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 
        <form action="addMen_clothes.php" method="POST">
         <label>product name:</label><br> <input type="text" name="mname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="mprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="mimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Men_clothes.php">Back to home</a></button>

</form>

</div>



</body>
</html>

