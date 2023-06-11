<?php
//connect to the database
include_once("db/db.php");  
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="fade-in">
        <img src="banner2.png" class="image" alt="" />

        <div class="logo">
            <a href="./index.php">ENVY</a>
        </div>
        <div class="container">
        <div class="avatar-flip">
        <img src="images/images.png" height="150" width="150">
        </div>
        <h2>Hello <?php echo($_SESSION['username']);?></h2>

        <form action="logout.php" method="post">
            <div class="container">
           <button type="logout">Logout</button>
            </div>
            </form>
            <form action="profile.php" method="post">
            <input type="hidden" placeholder="Enter uid" name="id" value="<?php echo($_SESSION['id']);?>">
            
             
            <button><a href="deleteProfile.php?id=<?php echo($_SESSION['id']);?>">Delete</a></button>
        </form>
       
    </div>


</body>

</html>