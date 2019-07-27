<?php


  include('connect.php');
   include('header.php');
?>
<!DOCTYPE html>
<html>
  
      <div class="main-m w3-content" class="col-xs-12 col-md-8">
         <div class="prudects" class="col-xs-12 col-md-8">
            <ul>
            
              <?php

                  $result = " SELECT * FROM products ";

                    $selected = mysqli_query($conn_shop,$result);

                     while($row = mysqli_fetch_assoc($selected)){


                     $proname =  $row['pro_name'];
                     $proprice =  $row['pro_price'];
                     $procimg = $row['pro_img'];

                     
        


                  ?>
               <li>
                  <div class="po-img">
                     <img src="<?php echo $row['pro_img'];  ?>"/>  
                  </div>
                <div class="po-do"><?php  echo $proname ." | ". $proprice; ?> SR</div>
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
      <br><br>
      <hr>
      <div class="container">
         <h2>Children, Men's and women's clothing, shoes and bags </h2>
         <!--Item Start-->
         <div class="item dresses_w">
            <a href="Women's_Clothing.php" target="_blank">
               <div class="images">
                  <img src="https://pa.namshicdn.com/product/88/4052/v4/1-desktop-web-catalog.jpg">
                  <img src="https://pa.namshicdn.com/product/85/4912/v8/1-desktop-web-catalog.jpg">
               </div>
            </a>
            <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item dresses_w">
            <a href="Hours.php" target="_blank">
               <div class="images">
                  <img src="http://s3.amazonaws.com/mbc_actionha/uploads/52170/large.jpg">
                  <img src="http://s3.amazonaws.com/mbc_actionha/uploads/52170/large.jpg">
               </div>
            </a>
            <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item dresses_w">
            <a href="Men_clothes.php" target="_blank">
               <div class="images">
                  <img src="http://vb.shbab5.com/pc/2016/1414160816_188.jpg">
                  <img src="http://vb.shbab5.com/pc/2016/1414160816_188.jpg">
               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item skirts_w">
            <a href="High_heel_shoes.php" target="_blank">
               <div class="images">
                  <img src="https://upload.3dlat.net/uploads/3dlat.net_24_16_8c6d_4412a56256611.jpg">
                  <img src="http://demandware.edgesuite.net/sits_pod15/dw/image/v2/AAJE_PRD/on/demandware.static/-/Sites-pacsun_storefront_catalog/default/dwd4fbafde/product_images/0840445380053NEW_01_510.jpg?sw=340&sh=528&sm=fit">
            </a>
            </div>
            <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item skirts_w">
            <a href="Men_shoes.php" target="_blank">
               <div class="images">
                  <img src="https://s-media-cache-ak0.pinimg.com/236x/b1/46/e2/b146e2c1cb16d3bd2fa8729f68e1b0d1.jpg">
                  <img src="http://demandware.edgesuite.net/sits_pod15/dw/image/v2/AAJE_PRD/on/demandware.static/-/Sites-pacsun_storefront_catalog/default/dwb7cdaa1d/product_images/0840498110007NEW_01_091.jpg?sw=340&sh=528&sm=fit">
               </div>
              
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item skirts_w">
            <a href="women_shoes.php" target="_blank">
               <div class="images">
                  <img src="https://static.fustany.com/images/ar/content/staff_picks_image_how-to-wear-jeans-according-shoes-style-fustany-main-image-AR.png">
                  <img src="https://static.fustany.com/images/ar/content/staff_picks_image_how-to-wear-jeans-according-shoes-style-fustany-main-image-AR.png">
               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item tees_m">
            <a href="Bags.php" target="_blank">
               <div class="images">
                  <img src="https://s-media-cache-ak0.pinimg.com/originals/28/41/38/284138f798fbd0c20ff842eaa28890a0.jpg">
                  <img src="https://s-media-cache-ak0.pinimg.com/originals/28/41/38/284138f798fbd0c20ff842eaa28890a0.jpg">

               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         <!--Item End-->
         <!--Item Start-->
        
         <div class="item tees_m">
            <a href="Girls_clothes.php" target="_blank">
               <div class="images">
                  <img src="https://upload.3dlat.net/uploads/3dlat.net_27_16_d627_4404c15a75fc3.jpg">
                  <img src="https://upload.3dlat.net/uploads/3dlat.net_27_16_d627_4404c15a75fc3.jpg">
               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
        
        
         <!--Item End-->
         <!--Item Start-->
         <div class="item shirts_m">
            <a href="Baby_clothes.php" target="_blank">
               <div class="images">
                  <img src="http://www.huluonline.com/images/2016/07/1325_7_or_1468976190.jpg">
                  <img src="http://www.huluonline.com/images/2016/07/1325_7_or_1468976190.jpg">
               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         <!--Item End-->
         <!--Item Start-->
         <div class="item shirts_m">
            <a href="glasses.php" target="_blank">
               <div class="images">
                  <img src="http://shbabbek.com/wp-content/uploads/2015/10/250db257311a0e94125fa57b74fed0ec.jpg">
                  <img src="http://shbabbek.com/wp-content/uploads/2015/10/250db257311a0e94125fa57b74fed0ec.jpg">
               </div>
               <h5><i class="fa fa-external-link" aria-hidden="true"></i></h5>
            </a>
         </div>
         
         <!--Item End-->
         <!--Item Start-->
         <div class="item jackets_m">
            <a href="women_bags.php" target="_blank">
               <div class="images">
                  <img src="https://www.mexatk.com/wp-content/uploads/2014/07/%D8%B4%D9%86%D8%B7-%D9%82%D9%88%D8%AA%D8%B4%D9%8A.jpg">
                  <img src="https://www.mexatk.com/wp-content/uploads/2014/07/%D8%B4%D9%86%D8%B7-%D9%82%D9%88%D8%AA%D8%B4%D9%8A.jpg">
               </div>
            </a>
         </div>
         <!--Item End-->
          <div class="item tm1">
               <div class="images">
             <img src="https://s-media-cache-ak0.pinimg.com/736x/40/6c/d8/406cd8d534564cabda31d7cc625d39b6--delicate-necklaces-dainty-necklace.jpg">

               </div>
         </div>
          <div class="item tm1">
                  <img src="https://i.ytimg.com/vi/lVVCkYnVdyE/hqdefault.jpg">
               </div>
         <div class="item tm1">
            <img id="mmm"  src="https://sc02.alicdn.com/kf/HTB1e_e1LVXXXXaJXVXXq6xXFXXXQ/New-Children-s-princess-dress-fashion-lace.jpg">
         </div>
         <div class="item tm2">
            <img id="mmm"  src="https://ae01.alicdn.com/kf/HTB1IIKGJFXXXXadXFXXq6xXFXXXQ/4pcs-set-NEW-baby-girl-set-white-girls-font-b-tshirt-b-font-flowers-belt-denim.jpg">
         </div>
         <div class="item tm1">
                  <img src="https://lh6.ggpht.com/jC6SFwWYqVMtzCf3ZPCBcMJBkKSrIOQ9WTVHbpDznQPK7HuNg6Ftl0G_VNr8nMz2qgw=w300">
         </div>
         <div class="item tm3">
            <img src="http://g02.a.alicdn.com/kf/HTB18n.jHVXXXXa2XFXXq6xXFXXXN/Fashion-girl-lace-sets-new-kids-girl-jeans-sets-mesh-t-shirt-short-pants-children-girls.jpg">
         </div>
         <div class="item tm4">
            <img src="http://fustany.com/images/ar/photo/large_kids-outfits-for-summer-fustany-5.jpg">
         </div>
         <br>
         <span>
         <div class="item tm5">
            <img src="https://uploads.sedty.com/imagehosting/217318_1412862101.jpg">
         </div>
         <div class="item tm6">
            <img id="mmm" src="http://img.youm7.com/Albums/albumimages/420161819142599%D9%85%D9%84%D8%A7%D8%A8%D8%B3-%D8%A3%D8%B7%D9%81%D8%A7%D9%84-(3).jpg">
         </div>
         <div class="item tm7">
            <img id="mmm" src="http://forums.egyptladiess.com/up/uploads/882fe7c8fd1.jpg">
         </div>
         <span>
         <br>
         <div class="item tm8">
            <img id="mmm" src="https://ae01.alicdn.com/kf/HTB1cWB0PXXXXXXhXXXXq6xXFXXXC/DTZ265-retail-Childrens-clothing-fashion-handsome-font-b-male-b-font-baby-short-sleeve-top-pants.jpg">
         </div>
         <div class="item tm2">
            <img id="mmm" src="http://st3-fashiony.ru/pic/kids/pic/134944/91.jpg">
         </div>
         <div class="item tm3">
            <img id="mmm"  src="https://4.bp.blogspot.com/-6paxnVXFIFM/V2g5-wy8vUI/AAAAAAACY7g/2phVfcxpbc841Ffvdpat2P_8kmaaWIX9wCLcB/s1600/Outfits-para-ni%25C3%25B1os%2B%252821%2529.jpg">
         </div>
         <div class="item tm4">
            <img id="mmm" src="https://upload.3dlat.net/uploads/3dlat.net_15_15_e1ee_f1aaa4368ec8d9de8ac8fb0406b214a7.jpg">
         </div>
      </div>
      </div>
      <script>
         var myIndex = 0;
         carousel();
         
         function carousel() {
             var i;
             var x = document.getElementsByClassName("mySlides");
             for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
             }
             myIndex++;
             if (myIndex > x.length) {myIndex = 1}    
             x[myIndex-1].style.display = "block";  
             setTimeout(carousel, 2000); // Change image every 2 seconds
         }
      </script>
      <!-- Subscribe section -->
      <div class="padding-64">
         <h1>Subscribe</h1>
         <h5>To get special offers and VIP treatment:</h5>
         <div class="nor">
            <p><input class="border" type="text" placeholder="Enter e-mail" ></p>
            <button type="button" class="mr">Subscribe</button>
         </div>
      </div>
      <!-- Footer -->
      <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
         <div class="w3-row-padding">
            <div class="w3-col s4">
               <h4>Contact</h4>
               <p>Questions? Go ahead.</p>
               <form action="#" target="_blank">
                  <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                  <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                  <button type="submit">Send</button>
               </form>
            </div>
            <div class="w3-col s4">
               <h4>About</h4>
               <p><a href="#">About us</a></p>
               <p><a href="#">We're hiring</a></p>
               <p><a href="#">Support</a></p>
               <p><a href="#">Find store</a></p>
               <p><a href="#">Shipment</a></p>
               <p><a href="#">Payment</a></p>
               <p><a href="#">Gift card</a></p>
               <p><a href="#">Return</a></p>
               <p><a href="#">Help</a></p>
            </div>
            <div class="w3-col s4 w3-store">
               <h4>Store</h4>
               <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
               <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
               <p><i class="fa fa-fw fa-envelope"></i> Mashel4n@gmail.com</p>
               <h4>We accept</h4>
               <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
               <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
               <br>
               <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
               <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
               <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
               <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
               <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
               <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
            </div>

            <div class="column one_third">
               <h1><i>Download the application:</i></h1>
               <button id="Masheal">
                  <p class="title"></p>
                  <a title="Download the app from Apple Store" href="#" rel="follow" target="_blank"><img id="mf" src="http://www.albayan.co.uk/Views/Shared/shared/images/media/appstore.png">
               </button>
               </a><br><button id="Mash"> <a title="Download android on Google Play " href="#" rel="follow" target="_blank" class="google_play_badge"><img id="mf" src="https://static1.squarespace.com/static/5796cca21b631bb168ca083e/5810f00c37c581dc5e1dcef2/5810f01f37c581dc5e1dd0f6/1477505225947/Google-Play-logo-3300x746-transparent+copy.png"> </a>
               </button>
            </div>

            <div class="select-arrow medium prefix globe">
               <select class="ui-select medium" tabindex="0">
                  <option selected="" value="/sa/" data-language="ar" data-country="SA">العربية</option>
                  <option value="/sa-en/" data-language="en" data-country="SA">English</option>
               </select>
            </div>
         </div>
      </footer>
      <!-- End footer -->
      <div class="required">
         <p class="copyright">©جميع الحقوق محفوظه</p>
      </div>
      </div>
      <!-- <div class="bg_footer"></div> -->
   </body>
</html>