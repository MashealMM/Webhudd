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
   
      $id = $_GET['id'];

  $result = " SELECT * FROM products WHERE pro_id ='$id'";

  $selected = mysqli_query($conn_shop,$result);

   $row = mysqli_fetch_assoc($selected);

                     $pro_id = $row['pro_id'];
                     $proname =  $row['pro_name'];
                     $proprice =  $row['pro_price'];
                     $procimg = $row['pro_img'];
 	 	?>
 	    <div>Editing Prodect</div>
 	 	<form action="Modifi_process.php?id=<?php echo $pro_id;   ?>" method="post">
 	 	 <label>product name:</label><br> <input type="text" name="proname"  value="<?php  echo  $proname ;  ?>"><br><br>
 <label>producr price :</label><br> <input type="text" name="proprice"  value="<?php echo $proprice ;   ?>"><br><br>
 <label>prodict img:</label> <br><input type="text" name="proimg"  value="<?php echo $procimg ;   ?>"><br><br>

<button type="submit">Update</button>
<button ><a href="Shoe_info.php">Back to home</a></button>


</form>

</div>
</body>
</html>
