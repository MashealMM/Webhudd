<!DOCTYPE html>
    <html>
      <?php    include('connect.php');
   include('head.php');
 ?>
<body>


 <div class="main-m w3-content" class="col-xs-12 col-md-8"> 

  <div class="prudects" class="col-xs-12 col-md-8"> <ul>



            <?php

                  $result = " SELECT * FROM `mshoes`";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $msname =  $row['ms_name'];
                     $msprice =  $row['ms_price'];
                     $msimg = $row['ms_img'];

                     
        


                  ?>
               <li>
                  <div class="po-img">
                     <img src="<?php echo $row['ms_img'];  ?>" />  
                  </div>
                <div class="po-do"><?php  echo $msname ." | ". $msprice; ?> SR</div>
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
</body></html>