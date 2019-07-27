
<?php

include('connect.php');
  include('head.php');

?>
<!DOCTYPE HTML>  
<html>
<head>
       <link rel="stylesheet" type="text/css"   href="rec/css/css.css">


             
</head>  
<body>


<div class="container">
<?php



   if(isset($_POST['submit'])){


$wname =$_POST['wname'];
$wprice =$_POST['wprice'];
$wimg =$_POST['wimg'];



 if (empty($wname) ||empty($wprice) || empty($wimg)){
    echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

    $insert = "INSERT INTO women(w_name,w_price,w_img)VALUES('$wname','$wprice','$wimg')";



      $inertok =  mysqli_query($conn_shop , $insert);


      if($inertok){

        echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


      }
    }

        
        }
        
        ?>
     
     
        <form action="addwomen.php" method="POST">
         <label>product name:</label><br> <input type="text" name="wname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="wprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="wimg"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="Women's_Clothing.php">Back to home</a></button>

</form>

</div>


</body>
</html>

