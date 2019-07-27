
<?php

include('connect.php');

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


                     $glname =  $_POST['glname'];
                     $glprice =  $_POST['glprice'];
                     $glimg = $_POST['gl_img'];



 if(empty($glname) || empty($glprice) || empty($glimg)){

    echo "<div style='color:white;width:200px;background:red;'> plaese fill the record</div>";

 }
 else{

    $insert = " INSERT INTO glasses(gl_name,gl_price,gl_img) VALUES('$glname','$glprice','$glimg')";



      $inertok =  mysqli_query($conn_shop , $insert);


      if($inertok){

        echo "<div style='color:white;width:200px;background:green;'>insert product successfully</div>";


      }
    }

        
        }
        
        ?>


 
        <form action="addglasses.php" method="POST">
         <label>product name:</label><br> <input type="text" name="glname"  placeholder="Your product name.."><br><br>
 <label>producr price :</label><br> <input type="text" name="glprice"  placeholder="product price .."><br><br>
 <label>prodict img:</label> <br><input type="text" name="gl_img"  placeholder="insert img link.."><br><br>

<button name="submit" ><a>Add product</a></button><br><br>
<button ><a href="glasses.php">Back to home</a></button>

</form>

</div>



</body>
</html>

