<?php
session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/LOGIN/Login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Home Page
	</title>
</head>
<body><center>
<h1> Hello <?php echo $_SESSION['username']; ?></h1>
<h2>Welcome to PHP practice example</h2>
<a href="Logout.php">Logout</a>
</center>
</body>
</html>