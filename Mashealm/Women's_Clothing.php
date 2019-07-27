<!DOCTYPE html>
<html>
    <?php    include('head.php');
         include('connect.php');

 ?>
           <div class="main-m w3-content" class="col-xs-12 col-md-8">

         <div class="prudects" class="col-xs-12 col-md-8">
            <ul>
               
               <?php

                  $result = " SELECT * FROM women";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $wname =  $row['w_name'];
                     $wprice =  $row['w_price'];
                     $wimg = $row['w_img'];

                  ?>
              <li>
                  <div class="po-img">
                     <img src="<?php echo $row['w_img'];?>" />  
                  </div>
                <div class="po-do"><?php  echo $wname ." | ". $wprice; ?> SR</div>
                  <div class="po-add">
                     <button onclick="alertmsg()">add to cart</button>
                  </div>
                  
               </li>
                <?php } ?>
           
               <li><a href="#">News</a></li>
               <li><a href="#">Contact</a></li>
               <li><a href="#">About</a></li>
            </ul>
         </div>
      </div>
   </body>
</html>