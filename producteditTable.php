<?php
 
 //connect to the database
include_once("db/db.php");  

// Select Product Table and get 
$result = mysqli_query($con,"SELECT * FROM product");

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleCRUD.css">
    <link rel="stylesheet" href="newstyles.css">
</head>

<body>
<div class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
        <br><br>
	
<center><h1>Product Details Display</h1></center>
<br>
<br>
<table class="tabledisplayuser">
  <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
    <?php while($product_data = mysqli_fetch_array($result) ) : ?>
        <tr>
            <td><?php echo($product_data['pro_id']);?></td>
            <td><?php echo($product_data['pname']);?></td>
            <td>
              <?php
                if ($product_data['cat'] == 1)  {
                echo "Women's";
                } elseif ($product_data['cat'] == 2) {
                echo "Men's";
                }
                else{
                echo "Kid's";
                }
              ?>
            </td>
            <td><?php echo($product_data['pro_value']);?></td>
            <td><?php echo($product_data['description']);?></td>
            <td><img width="50" src='images/<?php echo($product_data['pro_img']);?>'/></td>
            <td><a href='producteditForm.php?id=<?php echo($product_data['pro_id']);?>'>Edit</a> | <a href='ProductDelete.php?id=<?php echo($product_data['pro_id']);?>'>Delete</a></td>
        </tr>

        
        
    <?php endwhile; ?>

</table>

</div>

</div>

<!--footer--> 

<footer class="footer">
            
                    
            <h3>CONTACT US</h3><br>
                
             Reid Avenue , Colombo<br>
                   
             company@gmail.com<br>
                             
             011 8558551<br>
                   
             CMB , SRI LANKA<br>
        
        </footer>
    <!-- End Footer -->

</body>

</html>