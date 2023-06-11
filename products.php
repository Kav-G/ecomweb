<?php 
include_once("db/db.php");  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

    <title>Online Store</title>
</head>

<body>
    <!--Header-->
    <header id="home" class="product-hdr">
        <!--navigation-->
        <?php include_once("nav.php");?>
    </header>
        <div class="container">
        <div class="cat-box">
                <ul>
                    <li><a href=#a>Women's Clothing</a></li>
                    <li><a href=#b>Men's Clothing</a></li>
                    <li><a href=#c>Kids Clothing</a></li>           
                </ul>
            
        </div>
            
        
        </div>
        <br> <br>
        <!-- WOMEN'PRODUCT -->
        <section class="product-list">
        <center>

            <div class="title">
                
                <h1><a id=a><b>WOMEN'S PRODUCTS</b></a></h1><br><br>
                <img src="images/b1.png" width="100%" height="30%">

            </div>
        <br> <br>

        </center>
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>

        <div class="product-container"> 

        <!--  Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 1 ORDER BY pro_id DESC");
        ?>

        <?php  while($product_data = mysqli_fetch_array($result)): ?>
            
            <div class="card">
                <div class="title">
                    <?php echo($product_data['pname']);?>
                    
                </div>
                
                    <img src="images/<?php echo($product_data['pro_img']);?>">
                    
              
                <div class="text">
                    <b>Rs.<?php echo($product_data['pro_value']);?>
                    
                    </b>
                </div>
                <div class="text">
                    <?php echo($product_data['description']);?>
                </div>
                <a class="buy-btn" href='cart.php?id=<?php echo($product_data['pro_id']);?>'>Buy Now</a>
                
                
            </div>
</form>
        <?php endwhile; ?>

        
    </section>



    <!-- MEN'S PRODUCTS -->

    <section class="product-list">
        <center>
         
            <div class="title">
            
                <h1><a id=b><b>MEN'S PRODUCTS</b></a></h1><br><br>
                <img src="images/b2.png" width="100%" height="30%">

            </div>
        <br> <br>
            
        </center>
        <br />
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>

        <div class="product-container"> 

        <!--  Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 2 ORDER BY pro_id DESC");
        ?>

        <?php  while($product_data = mysqli_fetch_array($result)): ?>

            <div class="card">
                <div class="title">
                    <?php echo($product_data['pname']);?>
                    
                </div>
                
                    <img src="images/<?php echo($product_data['pro_img']);?>">
                    
              
                <div class="text">
                    <b>Rs.<?php echo($product_data['pro_value']);?>
                    
                    </b>
                </div>
                <div class="text">
                    <?php echo($product_data['description']);?>
                </div>
                <a class="buy-btn" href='cart.php?id=<?php echo($product_data['pro_id']);?>'>Buy Now</a>
                
                
            </div>

        <?php endwhile; ?>

       
    </section>

    <!-- KIDS CLOTHING -->

    
    <section class="product-list">
        <center>
         
            <div class="title">
                <h1><a id=c><b>KIDS STORE</b></a></h1><br><br>
                <img src="images/b3.png" width="100%" height="30%">

            </div>
        <br> <br>
            
        </center>
        <button class="buy-btn"><a href=#top> Click here to go to the top </a></button>
        <br><br>

        <br />
        <div class="product-container"> 

        <!-- Product -->
        <?php
            include_once("db/db.php");
            $result = mysqli_query($con, "SELECT * FROM product WHERE cat = 3 ORDER BY pro_id DESC");
        ?>

        <?php  while($product_data = mysqli_fetch_array($result)): ?>

            <div class="card">
                <div class="title">
                    <?php echo($product_data['pname']);?>
                    
                </div>
                
                    <img src="images/<?php echo($product_data['pro_img']);?>">
                    
              
                <div class="text">
                    <b>Rs.<?php echo($product_data['pro_value']);?>
                    
                    </b>
                </div>
                <div class="text">
                    <?php echo($product_data['description']);?>
                </div>
                <a class="buy-btn" href='cart.php?id=<?php echo($product_data['pro_id']);?>'>Buy Now</a>
                
                
            </div>

<?php endwhile; ?>

        
    </section>

    

<!--footer--> 

        <footer class="footer">
            
                    
                <h3>CONTACT US</h3><br>
                    
                 Reid Avenue , Colombo<br>
                       
                 company@gmail.com<br>
                                 
                 011 8558551<br>
                       
                 CMB , SRI LANKA<br>
            
        </footer>
        

</body>
</html>  
    
