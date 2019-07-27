<!DOCTYPE html>
    <html>
   <?php    include('connect.php');
   include('head.php');
 ?>
<body>


 <div class="main-m w3-content" class="col-xs-12 col-md-8"> 

  <div class="prudects" class="col-xs-12 col-md-8"> 
  <ul>


            <?php

                  $result = " SELECT * FROM `wshoes`";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $wsname =  $row['ws_name'];
                     $wsprice =  $row['ws_price'];
                     $wsimg = $row['ws_img'];

                     
        


                  ?>
               <li>
                  <div class="po-img">
                     <img src="<?php echo $row['ws_img'];  ?>" />  
                  </div>
                <div class="po-do"><?php  echo $wsname ." | ". $wsprice; ?> SR</div>
                  <div class="po-add">
                     <button onclick="alertmsg()">add to cart</button>
                  </div>
                  
            
                <?php } ?>
      </li>

  <li><a href="#">News</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="#">About</a></li>
</ul>

 </div>
 </div>
</body></html>