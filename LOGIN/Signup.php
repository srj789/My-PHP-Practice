<!DOCTYPE html >
<html >
<head>
<title>Sign Up Form</title>
<style>
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

<body bgcolor="#FFCC00">
<h2 style="color:#FF9; margin-left:300px;">Sign Up</h2>
<form  action=SignupInsertion.php method="post">	
<table align="center" cellpadding="3px" width="800px" >
    	<tr>
        	<th align="right" valign="top">First Name :</th>
            <td></td>
          <td width="400" align="left"><input placeholder="Enter First Name.." type="text" name="firstname"></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Last Name :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter Last Name.." type="text" name="lastname"></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Date Of Birth :</th><td></td>
          <td width="400" align="left"><input type="date" name="dob"></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Gender :</th><td></td>
          <td width="400" align="left"><input type="radio" name="gender" value="male" >Male<input type="radio" name="gender" value="female">Female</td>
    </tr>
        <tr>
        	<th align="right" valign="top">Address :</th><td></td>
          <td width="400" align="left"><textarea placeholder="Enter Address.." name="address" rows="5" cols="21"></textarea></td>
    </tr>
        <tr>
        	<th align="right" valign="top">State :</th><td></td>
            <td width="400" align="left">
            	<select name="state">
                <option value="default">-STATE-</option>
                <option value="assam">Assam</option>
                <option value="chattisgarh">Chattisgarh</option>
                <option value="gujrat">Gujrat</option>
                <option value="karnataka">Karnataka</option>
                <option value="rajasthan">Rajasthan</option>
              </select>
          </td>
    </tr>
        <tr>
        	<th align="right" valign="top">E-mail :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter E-mail.." type="email" name="email" ></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Phone :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter Phone.." type="number" name="phone" ></td>
    </tr>
    <tr>
          <th align="right" valign="top">User Name :</th>
            <td></td>
          <td width="400" align="left"><input placeholder="Create User Name.." type="text" name="username"></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Password :</th><td></td>
          <td width="400" align="left"><input type="password" name="password"></td>
    </tr>
        <tr>
        	<th align="right" valign="top"></th><td></td>
          <td width="400" align="left"><input type="checkbox"  name="confirm">I agree to the term of use</td>
    </tr>
  </table>
<br>
    <p align="right" style="margin-right:300px">
	<input type="submit" value="SUBMIT" style="background:#0C6; color:#FFF; padding:5px; border-color:#0C6">
    <input type="reset" value="RESET" style="background:#F33; color:#FFF; padding:5px; border-color:#F33">
    </p>
</form>
</body>
</html>
