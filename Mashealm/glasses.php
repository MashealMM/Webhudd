<!DOCTYPE html>
<html>
    <?php    include('head.php');
    include('connect.php');
 ?>
   <body>
      <div class="main-m w3-content" class="col-xs-12 col-md-8">
         <div class="prudects" class="col-xs-12 col-md-8">
            <ul>
            
            <?php

                  $result = " SELECT * FROM glasses";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $glname =  $row['gl_name'];
                     $glprice =  $row['gl_price'];
                     $glimg = $row['gl_img'];

                     
        


                  ?>
               <li>
                  <div class="po-img">
                     <img src="<?php echo $row['gl_img'];  ?>"/>  
                  </div>
                <div class="po-do"><?php  echo $glname ." | ". $glprice; ?> SR</div>
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
   </body>
</html>