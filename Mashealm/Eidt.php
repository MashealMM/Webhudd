<?php
include('connect.php');
?>
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css"   href="../rec/css/css.css">
</head>
<body>
<div class="container">
<?php
  $ID=$_GET['urid'];
  $result = " SELECT * FROM users WHERE user_id='$ID';";
  $selected = mysqli_query($conn_shop,$result);
   $row = mysqli_fetch_assoc($selected);
   $fname = $row['frstname'];
   $lname = $row['lastname'];
   $email = $row['email'];
   $password = $row['password'];
   if(isset($_POST['submit'])){
    $frstname =$_POST["frstname"];
$lastname =$_POST['lastname'];
$email =$_POST["email"];
$password =md5($_POST["password"]);
   $sql = "UPDATE users SET email='$email' , password='$password'  WHERE user_id='$ID';";
 $upadted = mysqli_query($conn_shop,$sql);
  if($upadted){
      echo "<div style='color:white;width:200px;background:green;'>Updated successfully</div>";
    }
}
?>
<form action="Eidt.php" method="post">
 <label>frst Name:</label><br> <input type="text" name="frstname"  value="<?php  echo  $fname ;  ?>" ><br><br>
 <label>last Name:</label><br> <input type="text" name="lastname" value="<?php  echo  $lname ;  ?>"><br><br>
 <label>E-mail:</label> <br><input type="text" name="email"  value="<?php  echo  $email ;  ?>"><br><br>
  <label>password:</label><br><input type="text" name="password"  value="<?php  echo  $password ;  ?>"><br><br>
<button  name="submit"><a>Update </a></button><br><br>
<button ><a href="index.php">Back to home</a></button>

</form>

</div>



</body>
</html>