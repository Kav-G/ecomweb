<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

    <title>Envy Online Store</title>
</head>

<body>
    <!--Header-->
    <header class="header">
        <!--navigation-->
            <?php include_once("nav.php");?>
        <!--homehdr-->
        <div class="fade-in">
            <div>
                <img src="./images/banner1.png" class="homehdr-img" alt="" />
            </div>
            <div class="homehdr-content">
                <h1>
                    VISIT OUR <br>
                    ONLINE STORE
                </h1>
                <a href="products.php" class="btn">SHOP NOW</a>
            </div>
        </div>

    </header>
    
    <!-- Main-->
    <main>
        <div class="section">
        <div class="storepath">
            <div class="storepath-center container">
                <div class="storepath-box">
                  
                        <div class="content">
                            <h2>
                            <a href="products.php#a" >
                               <b> Women's<br /> Clothing</b>
                            </h2>
                            
                        </div>
                    
                    <img src="./images/img1women.png " alt="" /></a>
                </div>
                <div class="storepath-box">
                
                        <div class="content">
                            <h2>
                            <a href="products.php#b" >
                            <b> Men's<br /> Clothing </b>
                            </h2>
                        </div>
                   
                    <img src="./images/img2men.png " alt="" /></a>
                </div>
                <div class="storepath-box">
                  
                        <div class="content">
                            <h2>
                            <a href="products.php#c">
                            <b> Kids<br /> Clothing </b>
                            </h2>
                            
                        </div>
                    
                    <img src="./images/img3kids.png " alt="" /></a>
                </div>

            </div>
           </div>
        </div>

        <!-- Promo Banner-->
        
        <img src="./images/promobanner.png" width="100%" height="75%">
        <br>
        <br>
        

        <!--footer--> 

        <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer-container">
                    <div class="footer-center">
                        <h3>CONTACT US</h3><br>
                    
                            
                 Reid Avenue , Colombo<br>
                       
                 company@gmail.com<br>
                       
                            
                 011 8558551<br>
                       
                 CMB , SRI LANKA<br>
                        
                   
                    

                    </div>
                </div>
            </div>
            </div>
        </footer>
        <!-- End Footer -->