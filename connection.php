<?php
$user = "root";
$password = "";
$db = "test";
$host = "localhost";
$port = 3306;

$link = mysqli_init();
session_start();
$_SESSION['message']='';
$mysqli=new mysqli($host,$user,$password,$db,$port);
if($mysqli -> connect_error )
{
  die("Connection Failed " .$mysqli -> connect_error);
}
echo("Connection Successful");

require 'validate.php';
?>