<?php
 
include_once("db/db.php");    

$result= mysqli_query($con,"SELECT * FROM users");


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleCRUD.css">
    <link rel="stylesheet" href="newstyles.css">
</head>

<body>
<header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
        <br><br>
<center><h2>User Details Display</h2></center>
<br>
<br>
<table class="tabledisplayuser">
  <tr>
  <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>User role</th>
    <th>Action</th>
  </tr>

    <?php while($user_data = mysqli_fetch_array($result) ) : ?>
        <tr>
            <td><?php echo($user_data['id']);?></td>
            <td><?php echo($user_data['fname']);?></td>
            <td><?php echo($user_data['lname']);?></td>
            <td><?php echo($user_data['email']);?></td>
            <td><?php echo($user_data['username']);?></td>
            <td><?php
                      if ($user_data['role'] == 1)  {
                            
                        echo "Admin";
                        
                        } else {
                        echo "General";
                        }
                    ?></td>
            <td><a href='usereditForm.php?id=<?php echo($user_data['id']);?>'>Edit</a> | <a href='userDelete.php?id=<?php echo($user_data['id']);?>'>Delete</a>  </td>
            
        </tr>
        
    <?php endwhile; ?>
</table>

</div>

</header>

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