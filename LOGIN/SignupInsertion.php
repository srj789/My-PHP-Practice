<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$state=$_POST['state'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'login_db');
$q="insert into signup (firstname,lastname,dob,gender,address,state,email,phone,username,password) values('$firstname','$lastname','$dob','$gender','$address','$state','$email',$phone,'$username','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup Insertion</title>
</head>
<body>
<h1>Sign up Window</h1>
<p>
<?php
		if($status==1)
			echo "Successfully Sign up";
		else
			echo "Sign up Failed";
	?>
</p>
Go to Login Page..<a href="Login.php">Click Here</a>
</body>
</html>