<!DOCTYPE html>
<html>
<head>
	<title>
		Login Window
	</title>
	<style type="text/css">
		table {
	border: 2px solid white;
	}
	table, th, td{
	background:#003;
	color:#FF0;
	padding:8px;
	}
	</style>
	
</head>
<body><center>
<body bgcolor="#FFCC00">
<h1 style="color:RED; margin-right:300px; margin-top: 100px;"> Login Window</h1>
<form action="Validation.php" method="post">
	<table align="center" cellpadding="3px" width="550px">
		<tr>
		<th align="right" valign="top">Username :</th>
		<td><input type="text" name="username" required /></td>
		</tr>
		<tr>
		<th align="right" valign="bottom">Password :</th>
		<td><br><input type="Password" name="password" required /></td>
		</tr><br>
		<tr>
		<th></th>
		<td><br><input type="submit" value="Login" style="background:#0C6; color:#FFF; padding:5px; border-color:#0C6"/></td>
		</tr>
		<tr>
		<th align="right">New User ? Sign up here :</th>
		<td>
		<a href="Signup.php">
		<input type="button" value="SIGN UP" style="background:#F33; color:#FFF; padding:5px; border-color:#F33"></td>
		</tr>
	</table>
	</form>
	</center>
	</body>
	</html>