<?php
	//DB Connection
	include_once("db/db.php");

	if(isset($_POST['submit'])) {
		
        $category = $_POST['cat'];
		$price = $_POST['pro_value'];
        $des   = $_POST['description'];
        $image =$_FILES['pro_img']['name'];
        $tempname = $_FILES["pro_img"]["tmp_name"];
        $pname = $_POST['pname'];

  		// image file directory
		$target = "images/".$image;

		// Insert Query
		$result = mysqli_query($con, "INSERT INTO product(cat,pro_value,pro_img,description,pname) VALUES ('$category','$price','$image','$des','$pname')");

		// If Sucess 
        if (move_uploaded_file($tempname, $target))  { 
			echo '<script language="javascript">alert("Product Added");</script>';
        }
		// Not Sucess
		else{ 
            echo '<script language="javascript">alert("Product Not Add");</script>';
    		}	
	}
?>

<!doctype html>
<html>
<head>
    
<link rel="stylesheet" href="newstyles.css" />
	
<title>addproduct</title>
</head>

<body>
	 <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
		
		
		<center><h1>ADD PRODUCT</h1> <br />

	<div class="productcontainer">
  		<form name="productForm" action="productAdd.php" enctype="multipart/form-data" method="post">
    			<div class="row">
     			 	<div class="col-25">
       				 <label for="pname">Product Name</label>
     			 	</div>

      				<div class="col-75">
        			<input type="text" id="pname" name="pname" placeholder="Enter product name">
      				</div>
    			


    			
      				<div class="col-25">
        			<label for="category">Product Category</label>
      				</div>

      				<div class="col-75">
        			<select id="category" name="cat">
          				<option value="1">WOMEN'S</option>
          				<option value="2">MEN'S</option>
          				<option value="3">KIDS</option>
        			</select>
      				</div>
    			

				<div class="col-25">
        			<label for="price">Price</label>
      				</div>
				
				<div class="col-75">
        			<input type="text" id="price" name="pro_value" placeholder="Enter price">
      				</div>
				
			
   

			
				<div class="col-25">
        			<label for="description">Description</label>
      				</div>
      
				<div class="col-75">
        			<textarea id="description" name="description" placeholder="Enter description" style="height:150px"></textarea>
      				</div>
    			
			
			
				<div class="col-25">
					
        			<label for="pro_img">Image</label>
					
      				</div>
      
				<div class="col-75">
					<input type="file" name="pro_img">
      				</div>
    			</div>
 
      			<input type="submit" value="submit" name="submit">
    			</div>
			</div>
		</center>
  	</form>
		
		<br />
		
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
