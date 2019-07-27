 <?php

include('connect.php');


?>
<!DOCTYPE HTML>  
<html>
<link rel="stylesheet" type="text/css"   href="rec/css/css.css">
<body>


<div class="container">
<?php


     $result = " SELECT * FROM users ";

  $selected = mysqli_query($conn_shop,$result);

   while($row = mysqli_fetch_assoc($selected)){


   $eamil1 =  $row['email'];
  

  } 

   if(isset($_POST['submit'])){


$frstname =$_POST["frstname"];
$lastname =$_POST['lastname'];
$email =$_POST["email"];
$password =md5($_POST["password"]);
$Rewritepassword =md5($_POST["Rewritepassword"]);


 if (empty($frstname) ||empty($lastname) || empty($email) ||  empty($password) || empty($Rewritepassword) ){

 	echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }elseif($password != $Rewritepassword ){

 	echo "<div style='color:white;width:200px;background:red;'> The password Mismatch</div>";

 }elseif($email == $eamil1 ){

 	echo "<div style='color:white;width:200px;background:red;'> The Email is found</div>";

 }
 else{

 	$insert = "INSERT INTO users(frstname,lastname,email,password,repassword)VALUES('$frstname','$lastname','$email','$password','$Rewritepassword')";



 	  $inertok =  mysqli_query($conn_shop , $insert);


 	  if($inertok){

 	  	echo "<div style='color:white;width:200px;background:green;'>insert successfully</div>";


 	  }
 	}

 	 	
 	 	}
 	 	
 	 	?>
 	 	
 	 	<form action="Sign_Up.php" method="post">
 	 	 <label>frst Name:</label><br> <input type="text" name="frstname"  placeholder="Your name.."><br><br>
 <label>last Name:</label><br> <input type="text" name="lastname"  placeholder="Your last name.."><br><br>
 <label>E-mail:</label> <br><input type="text" name="email"  placeholder="E-mail.."><br><br>
  <label>password:</label><br><input type="password" name="password"  placeholder="password.."><br><br>
  <label>Rewrite password:</label><br><input type="password" name="Rewritepassword"  placeholder="Rewrite password.."><br><br>
<button name="submit" ><a>Register</a></button><br><br>
<button ><a href="index.php">Back to home</a></button>

</form>

</div>



</body>
</html>

