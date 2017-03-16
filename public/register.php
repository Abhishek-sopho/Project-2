<!doctype html>
<html>
<head>
<title>Register</title>
</head>
<body>
<form action="login.php" method="POST">
Email:<input name="email" type="text" placeholder="Email"><br>
First name:<input name="name" type="text" placeholder="Name"><br>
college:<select>
	<option value="college" selected>Select College</option>
</select><br>
Password:<input name="password" type="password" placeholder="password"><br>
Re-type Password:<input name="repassword" type="password" placeholder="Re-type password"><br>
Gender:<input type="radio" name="sex" value="0">M <input type="radio" name="sex" value="1">F<br>

<button type="submit">Register</button>
</body>
</html>
