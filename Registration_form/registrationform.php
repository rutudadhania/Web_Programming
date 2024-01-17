<html>
<head>
      <title>Registration Form</title>
</head>
<body>
<form action="catch1.php" method="get">
<table bgcolor="#ac936e" align="center">
<tr><td><th><b> Registration Form </b></th></td></tr>
<tr><td>Username: </td><td> <input type="text" name="username" /> </td></tr>
<tr><td>Password: </td><td> <input type="text" name="password" /> </td><tr>
<tr><td>Name: </td><td> <input type="text" name="name" /> </td></tr>
<tr><td>Address:</td><td><input type="text" name="address" /> </td></tr>
<tr><td>Country: </td><td><select id="Country" name="country" placeholder="(Please select a country)"/>
<option>(Please select a country) </option>
<option value="Austria"> Austria </option> 
<option value="Canada"> Canada </option>
<option value="Bhutan"> Bhutan </option></select></td></tr>
<tr><td>ZIP Code:</td><td> <input type="text" name="zip" /> </td></tr>
<tr><td>Email:</td><td> <input type="email" name="email" /> </td></tr>
<tr><td>Sex:</td><td><label> <input type="radio"  name="sex" value="male">Male </label>
                     <label> <input type="radio"  name="sex" value="female">Female</label></td></tr>
<tr><td>Language:</td><td> <label><input type="checkbox" name="language" value="English" id="english">English </label>
		  <input type="checkbox" name="language" value="Non English" id="non English">Non English </td></tr></label>
<tr><td>About: </td><td><textarea rows="6" cols="30" name="about" id="about" /> </textarea> </td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="submit" /> </tr></td>
</form>
</table>
</body>
</html>