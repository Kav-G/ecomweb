<?php

include_once("db/db.php");

// Get id from URL to delete that user
$id = $_GET['id'];


$result = mysqli_query($con, "DELETE FROM users WHERE id=$id");

header("Location:logout.php");
?>