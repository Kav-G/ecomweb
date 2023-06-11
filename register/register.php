<?php 
include "../db/db.php";

if(isset($_POST['submit'])){

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $uname = $_POST['uname'];
     $pass = $_POST['psw']; 
     $re_pass = $_POST['repasw'];
     $email= $_POST['email'];

     if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match");
	    exit();
    }

    // Insert Query
		$sql = mysqli_query($con, "SELECT * FROM users WHERE username='$uname'");

		if (mysqli_num_rows($sql) > 0) {
			  header("Location: register.php?error=The username is taken try another&$user_data");
        }

    else {
          $sql2 = mysqli_query($con, "INSERT INTO users (fname, lname, username, email, pwd) VALUES('$fname', '$lname', '$uname', '$email', '$pass')");
           
           if ($sql2) {
                header("Location: ../index.php");
           }else {
	           	header("Location: register.php?error=unknown error occurred");

           }
		}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="fade-in">
        <img src="banner3.png" class="image" alt="" />
    
    <div class="logo">
        <a href="../index.php">ENVY</a>
    </div>
    <form action="register.php" method="post">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="fname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="fname" required>

            <label for="lname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lname" required>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for=""><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="repasw" required>

            <button type="submit" name="submit" value="Register">Register</button>
</div>
    </form>
</body>


</html>