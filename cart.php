<?php
// Databace Connection
include_once("db/db.php");

$id = $_GET['id'];


if(isset($_POST['submit'])) {
    $pro_id     =   $_POST['pro_id'];
    $quantity   = $_POST['quantity'];
    $price      = $_POST['price'];
    $user_id    = $_POST['user_id'];    
    $pay_method_id   = $_POST['pay_method_id'];

    $result = mysqli_query($con, "INSERT INTO cart (pro_id,quantity,price,user_id,pay_method_id) VALUES ('$pro_id','$quantity','$price','$user_id','$pay_method_id')");
   
    header("Location: products.php");
}

// Display Orders
$result2 = mysqli_query($con, "SELECT * FROM product WHERE pro_id = $id");

?>

<!doctype html>
<html>
<head>
    
<link rel="stylesheet" href="newstyles.css" />
	
<title>cart</title>
</head>

<body>
	 <!--Header-->
    <header class="header">
        <!--navigation-->
        <?php include_once("nav.php");?>
        <!--cart section-->
        
        <div class="cart-page">
        <table class="cartdisplay">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <?php
           
            
        ?>
        <?php  while($product_data = mysqli_fetch_array($result2)): ?>

                <form name="odersForm" action="cart.php" enctype="multipart/form-data" method="post">
                <tr>
                    <td>
                        <div class="cart-info">
                            
                            <img src="images/<?php echo($product_data['pro_img']);?>">
                            <input type="hidden" id="oname" value="<?php echo($_SESSION['id']);?>" name="user_id" placeholder="">
                            <div>
                            <p><?php echo($product_data['pname']);?></p>
                            <input type="hidden" id="oname" value="<?php echo($product_data['pro_id']);?>" name="pro_id" placeholder="">
                            <small>Price: LKR
                            <input type="text" id="oname" readonly value="<?php echo($product_data['pro_value']);?>" name="price" placeholder=""></small>
                            <br>
                            </div>

                        </div>
                    </td>
                    <td><input type="number" name="quantity" value="1" readonly> </td>
                    <td><?php echo($product_data['pro_value']);?></td>
                </tr>
            </table>
            
            <div class="cartdisplay" id="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td><?php echo($product_data['pro_value']);?></td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>LKR. <?php echo($product_data['pro_value']);?></td>
                    </tr>

                    <tr>
                        <td><select name="pay_method_id">
                            <option value="Visa">Visa</option>
                            <option value="Cash">Cash On dilivery</option>
                        </select></td>
                        <td><input style="width:200px" type="submit" value="submit" name="submit"></td>
                    </tr>

                    
                    
                </table>
                <?php endwhile; ?>
</form>

            </div>
                </div>

                </header>
        <br />

        
</body>
</html>
