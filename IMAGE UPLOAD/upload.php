<?php
$username=$_POST['username'];
$f=$_FILES["myfile"];
echo  "file name=".$f['name'];
echo "<br>";
echo  "file type=".$f['type'];
echo "<br>";
echo  "file size=".$f['size'];
echo "<br>";

if(file_exists("photos/".$f['name']))
{
	echo $f['name']." already exist";
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else
{
	echo "file format is not valid, unable to upload";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Upload Window
	</title>
	<h3>Do you want to upload more pictures?<a href="application.html"> Click Here</h3>
	</a>
	</h3>
	</head></html>