<?php
include "db/db.php";
	if(isset($_POST['submit'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pass = $_POST['psw']; 
        $re_pass = $_POST['repasw'];
        $email= $_POST['email'];

//check password
    if($pass !== $re_pass){
        header("Location: adduser.php?error=The confirmation password  does not match");
	    exit();
      }
		  $result = mysqli_query($con, "SELECT * FROM users WHERE username='$uname'");

		if (mysqli_num_rows($result) > 0) {
			header("Location: register/register.php?error=The username is taken");
      
	        exit();
        }else {
        
           $result2 = mysqli_query($con, "INSERT INTO users (fname, lname, username, email, pwd) VALUES('$fname', '$lname', '$uname', '$email', '$pass')");
           if ($result2) {
                header("Location: admin.php");
                
           }else {
	           	header("Location: admin.php?error=unknown error occurred");
		
           }
		}
    } 
?>

<!doctype html>
<html>
<head>
    
<link rel="stylesheet" href="newstyles.css" />
<style type="text/css">

    input[type="password"]
      {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
 </style>
	
<title>adduser</title>
</head>

<body>
	 <!--Header--> 
        <!--navigation-->
        <?php include_once("adminnav.php");?>
		
		
		<center>
        <h1>ADD USER</h1> <br />

	<div class="adduser">
        <div>

        <div class="productcontainer">

  		<form name="userForm" action="userAdd.php" method="post">
        <div class="row">
          <div class="col-25">
            <label><b>Firstname</b></label>
          </div>
          <div class="col-75">
            <input type="text" placeholder="Enter Firstname" name="fname" required><br><br>
          </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label><b>Lastname</b></label>
            </div>

            <div class="col-75">
                <input type="text" placeholder="Enter Lastname" name="lname" required><br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label><b>Username</b></label>
            </div>

            <div class="col-75">
                <input type="text" placeholder="Enter Username" name="uname" required><br><br>
            </div>
        </div>

        

        <div class="row">
            <div class="col-25">
                <label><b>Email</b></label>
            </div>

            <div class="col-75">
                <input type="text" placeholder="Enter Email" name="email" required><br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label><b>User Role</b></label>
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
            <div class="col-25">
                <label><b>Password</b></label>
            </div>

            <div class="col-75">
                <input type="password" placeholder="Enter Password" name="psw" required><br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label><b>Re-Enter Password</b></label>
            </div>

            <div class="col-75">
                <input type="password" placeholder="Re-Enter Password" name="repasw" required><br><br>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="submit" name="submit">
		</div>
        </center>
  	</form>
      </div>
		
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
