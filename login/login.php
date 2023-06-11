<?php
include "../db/db.php";
if(isset($_POST['submit'])){

	$uname = $_POST['uname'];
	$pass = $_POST['psw'];

	$sql = mysqli_query($con, "SELECT * FROM users WHERE username='$uname' AND pwd = '$pass'");

		if (mysqli_num_rows($sql) === 1) {

			$row = mysqli_fetch_assoc($sql);
            if ($row['username'] === $uname && $row['pwd'] === $pass) {

				$_SESSION['username'] = $row['username'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['pwd'] = $row['pwd'];
				$_SESSION['role'] = $row['role'];

				$id = $row['role'];
				if($id == 1)
				{
					header("Location: ../admin.php");
					exit();	
				}
				else{
            	header("Location: ../index.php");
				exit();
				}

            }
			
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
        <img src="banner2.png" class="image" alt="" />
        <div class="logo">
        <a href="../index.php">ENVY</a>
        </div>
        <form action="login.php" method="post">
            <div class="container">
                <h1>LOGIN</h1>
                <div class="form-style">
                    <label for="uname"><b>USERNAME</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <label for="psw"><b>PASSWORD</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <button type="submit" name="submit">Login</button>
                </div>
            </div>
        </form>
</body>
</html>