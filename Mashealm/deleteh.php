
<style>

button {
    display: inline-block;
    padding: 5px 54px;
    font-size: 14px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    border: none;
    border-radius: 15px;
    box-shadow: 2px 4px 5px rgba(102, 102, 102, 0.41);
    background-color: rgb(111, 28, 59);
}
a {
    text-decoration: none;
    color: white;
}
</style>

<?php

include('connect.php');






      $idh = $_GET['id'];

               
               
               
                    $resultdel = " DELETE  FROM products WHERE pro_id = '$idh' ";

                   $deleted = mysqli_query($conn_shop,$resultdel);

                    if($deleted){

                   echo "<div style='color:white;width:200px;background:green;'>Deleted successfully</div>";
                  


                     }
                    
         

?>


   <button ><a href="index.php">Back to home</a></button>
