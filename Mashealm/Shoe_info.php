<!DOCTYPE HTML>  
<html>
<head>
<style >
  a {
    text-decoration: none;
    color: white;
}
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
}

th, td {
    padding: 8px;
}
#a {
    text-decoration: none;
    text-align: center;
    color: #ffffff;
}
.comercial {
    
    width: 27%;
    margin: auto 550px;
    border-radius: 5px;}

.comercials {
    padding: 2px 19px;
    text-align: center;
    text-decoration: none;
    outline: none;
    border: none;
    background-color: rgb(111, 28, 59);}
    button#silm {
    background-color: #750928;
    padding: 7px;
    text-align: center;
}
</style>
       <link rel="stylesheet" type="text/css"   href="../rec/css/css.css">

</head> 
  <?php    include('connect.php');
 ?>
<body>
<div class="comercial">
<h1>Shoppingcart</h1>
<table>
  <tr>
    <th>The product</th>
    <th>price</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
     <?php
                  $result = " SELECT * FROM products";
                    $selected = mysqli_query($conn_shop,$result);
                     while($row = mysqli_fetch_assoc($selected)){
                      $pro_id = $row['pro_id'];
                     $proname =  $row['pro_name'];
                     $proprice =  $row['pro_price'];
                     $procimg = $row['pro_img'];
                  ?>
  <tr>
    <form action="Shoe_info.php" method="post">
    <td><?php echo  $proname ; ?></td>
    <td><?php echo  $proprice ; ?></td>
    <td><a class="comercials" href="Modifi.php?id=<?php echo  $pro_id ; ?> ">Edit</a></td>
    <td><a class="comercials" href="deleteh.php?id=<?php echo  $pro_id ; ?> ">Delete</a></td>
    </form>
  </tr>

<?php  } ?>

</table>
<button id="silm" ><a id="a" href="addpro.php">Add to the bag</a></button>

</div>
</body>
</html>
