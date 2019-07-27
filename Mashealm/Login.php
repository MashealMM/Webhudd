<?php

include('connect.php');

?>


<!DOCTYPE HTML>
<html>
<link rel="stylesheet" type="text/css"   href="rec/css/css.css">
  
<body>
<div class="container">
<?php

   if(isset($_POST['submit'])){

$email =$_POST["email"];
$password =md5($_POST["password"]);

  $result = " SELECT * FROM users  WHERE email = '".$email."'  && password = '".$password."'";

  $selected = mysqli_query($conn_shop,$result);

   while($row = mysqli_fetch_assoc($selected)){


   $eamil1 =  $row['email'];
   $pass =  $row['password'];

  }   

if ($email == $eamil1 && $password == $pass ) {


    header("location:index.php");

}

  else{ 
    
    die("login failed");
  }

}
?>


<form id="from" action="Login.php" method="post">

     <label>E-mail:</label>
     <input type="text" name="email"><br>
     <label>password:</label> 
     <input type="password" name="password"><br>
     <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
     <div class="rtl checkbox">
     <label for="remember_me"> Remember Me </label>
     <input type="checkbox" id="remember_me" name="_remember_me" value="on"> 

             
      </div>
    </div>
  </div>

     
      <button name="submit" class="btn btn-success btn-block">log in</button>
     
    </div>
</form></div>



</body>
</html>