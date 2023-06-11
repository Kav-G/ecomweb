<?php 
//connect to the database
include_once("db/db.php");  
?>
<!doctype html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newstyles.css" />

	
<title>admin page</title>
	
	
	
</head>

<body>
    <!--Header-->
    <header id="home" class="headeradmin">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
	
	<main>
            <div class="storepath-center container">
                <div class="storepath-box-admin"> 
                    <div class="dotted">
                        <div class="content">
                            <h2>Orders</h2>
                            <span>
                                

<?php 

	    // Execute the query and store the result set 
	    $result = mysqli_query($con, "SELECT id FROM cart"); 
 
		$row = mysqli_num_rows($result); 

		printf("Total Orders : " . $row); 
			
?> 



                            </span>
							
                        </div>
						<img src="./images/adicon1.png " alt=""/>
                    </div>
                </div>
                <div class="storepath-box-admin">

                        <div class="content">
                            <h2> 

                                Sales <br /> Revenue </h2>

                                <span>
                                <?php 

include_once("db/db.php");

// Execute the query and store the result set 
$result2 = mysqli_query($con, "SELECT sum(price) as total FROM cart"); 

while ($row2 = mysqli_fetch_assoc($result2))
{ 
  printf("LKR : " . $row2['total']); 
   
}

?>


</span>
                        
                    </div>
                    <img src="./images/person.png " alt=""/>
                </div>
                
            </div>
  
	
    <!--User management-->
		<center>
			<div class="card">
				
				 	<h1>User Management functions</h1>
				<table>
                    <tr>
                        <td style="padding: 40px; text-align: center;">
               <a href="userAdd.php" ><div class="userbox">
                    <div class="userdotted">
                       
				<div class="content">
                            <h2> 
                                Add Users
							</h2>
                        </div>
                    </div>
                </div></a>
            </td >

            <td style="padding: 40px; text-align: center;">
                <a href="userDispaly.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                            View User
                            </h2>
                            
                        </div>
					</div>
                </div></a>
            </td>
            
            <td style="padding: 40px; text-align: center;">
                <a href="usereditTable.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                            Edit User
                            </h2>
                            
                        </div>
					</div>
                </div></a>
            </td>
            </tr>
            </table>	    
            </div>
    
				  
             
			
		
			<div class="card">
				
				 	<h1>Content Management functions</h1>
                     <table>
                     <tr>
                         <td style="padding: 40px; text-align: center;">	 
                <a href="productAdd.php"><div class="userbox">
                    <div class="userdotted">
                       
				<div class="content">
                            <h2> 
                                Add products
							</h2>
                        </div>
                    </div>
                </div></a>
            </td>

            <td style="padding: 40px; text-align: center;">
                <a href="productDisplay.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                                View Products 
                            </h2>
                            
                        </div>
					</div>
                </div></a>
                </td>
            
            <td style="padding: 40px; text-align: center;">
                <a href="producteditTable.php" ><div class="userbox">
                    <div class="userdotted">
                        <div class="content">
                            <h2> 
                                Edit product content
                            </h2>
                            
                        </div>
					</div>
                </div></a>
                </td>
                     </tr>
                    </table>
                
            </div>
  
				  

			</center>
	  
			 
			
	</main>
		
	
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
