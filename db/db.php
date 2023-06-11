<?php
// Turn off all error reporting
error_reporting(0);

session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ecomweb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}



?>