<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login_db');
$q="select * from signup where username='$username' && password='$password'";
$status=mysqli_query($con,$q);
$num=mysqli_num_rows($status);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/LOGIN/Home.php');
}
else
{
	header('location:http://localhost/LOGIN/Login.php');
}
mysqli_close();
?>
