<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="formstyle.css" />
<script type="text/javascript" src="formscript.js"></script>
	<title>
		Application Window
	</title>
</head>
<body>
<div id="form-div">
<form action="#" method="post">
<h1>Application Form</h1>
<div>
<label> Name</label>
<input type="text" name="username">
</div>
<div>
<label>Select State</label>
<select onchange="fetchcities(this.value)">
<option>Select State</option>
<option>Bihar</option>
<option>Madhya Pradesh</option>
<option>Uttar Pradesh</option>
<option>Rajasthan</option>
</select>
</div>
<div>
<label>Select City</label>
<select id="cities">
	<option>First select State</option>
</select>
</div>
<div>
<input type="submit" value="submit" id="b1"/>
</div>
</form>
</div>
</body>
</html>

