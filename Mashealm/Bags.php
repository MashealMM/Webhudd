  <?php 
      include('head.php');
  
   include('connect.php');
 ?>
<!DOCTYPE html>
    <html>
 
<body>


 <div class="main-m w3-content" class="col-xs-12 col-md-8"> 

  <div class="prudects" class="col-xs-12 col-md-8">
   <ul>



            <?php

                  $result = " SELECT * FROM bags";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $bname =  $row['b_name'];
                     $bprice =  $row['b_price'];
                     $bimg = $row['b_img'];

                     
        


                  ?>
               <li>
                  <div class="po-img">
                     <img src="<?php echo $row['b_img'];  ?>" />  
                  </div>
                <div class="po-do"><?php  echo $bname ." | ". $bprice; ?> SR</div>
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