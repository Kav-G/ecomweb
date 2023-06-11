<?php
    include_once("db/db.php");

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];

        $fname =  $_POST['fname'];
        $lname =  $_POST['lname'];
        $email =  $_POST['email'];
        $username =  $_POST['username'];
        $userrole = $_POST['role'];

        $result = mysqli_query($con, "UPDATE users SET fname ='$fname', lname = '$lname', email ='$email', username='$username', role='$userrole'  WHERE id = $id");

        header("Location: usereditTable.php");

    }



?>

<!--Retrive data from useredit-->
<?php 
    $id=$_GET['id'];

    $result = mysqli_query($con,"SELECT * FROM users WHERE id=$id");

    while($user_data = mysqli_fetch_array($result))
    {
       $fname =  $user_data['fname'];
       $lname = $user_data['lname'];
       $email = $user_data['email'];
       $username = $user_data['username'];
       $userrole = $user_data['role'];
    }
    ?>

<!doctype html>
<html>
<head>
    
<link rel="stylesheet" href="newstyles.css" />
	
<title>edit users</title>
</head>

<body>
	 <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
		
		
		<center><h1>UPDATE USER</h1> <br />
        
	<div class="productcontainer">
  		<form name="update_pro_Form" action="usereditForm.php" method="post">
    			<div class="row">
     			 	<div class="col-25">
       				    <label>First Name</label>
     			 	</div>

      				<div class="col-75">
        			    <input type="text" id="fname" name="fname" value=<?php echo $fname;?>>
      				</div>
    			</div>


    			<div class="row">
      				<div class="col-25">
        			    <label>Last Name</label>
                      </div>
                      
                    <div class="col-75">
        			    <input type="text" id="lname" name="lname" value=<?php echo $lname;?>>
      				</div>
      				
    			</div>

			<div class="row">
			
				<div class="col-25">
        			<label >Email</label>
      				</div>
				
				<div class="col-75">
        			<input type="text" id="email" name="email" value=<?php echo $email;?>>
      				</div>
				
			</div>
   

			<div class="row">
				<div class="col-25">
        			<label>Username</label>
      				</div>
      
				<div class="col-75">
                <input type="text" id="username" name="username" value=<?php echo $username;?>>
      				</div>
    			</div>
			
                <div class="row">
				<div class="col-25">
        			<label>User role</label>
      				</div>
                      
                      <div class="col-75">
    
    <select id="category" name="role">
                
                <option value="1">
                    <?php
                            if ($userrole = 1) {
                            
                            echo "Admin";
                        
                            }
                    ?>
                </option>

<option value="2">
                <?php
                        if ($userrole = 2 ) {
                            
                        echo "User";
                        
                        }
                ?>
                </option>


                
        </select>
          </div>
    			</div>
                
                <div class="row">
      			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    			</div>    
 
			<div class="row">
      			<input type="submit" value="update" name="update">
    			</div>
			</div>
                    </div>
                   
  	</form>
      </center>	
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
