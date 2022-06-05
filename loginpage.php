	<html>

<head>
<title>user login</title>
<link rel="stylesheet" href="loginpage.css">
</head>

<body>
<center>



<form action="process3.php" method="post">
<div id="head">Employee's Provident Fund Organisation</div>
<div >
<br>
<br>

     <label><h4>UserName</h4></label>&nbsp;
     <input type="text" id="user" name="user" required>
</div>
<div >
     <br>
     <label><h4>Password</h4></label>
     <input type="password" id="password" name="password" required>
 </div>
<div class="log">
	 <br>
     <input type="submit" value="Login" id="button" name="button">
</div>
<br>
<a href="createlogin.php"><h4 id="submit">Create Account</h4></a>
<a href="forgotpassword.php"><h4 id="submit">Forgot Password</h4></a>
</form>

</center>
</body>

</html>
