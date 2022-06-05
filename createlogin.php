<html>

<head>
<title>Create login</title>
<link rel="stylesheet" href="loginpage.css">
</head>

<body>
<center>


 
<form method="post" action="process2.php">
<div id="head">Employee's Provident Fund Organisation</div>
<div >
<br>
<br>

     <label><h4>UserName</h4></label>
     <input type="text" id="user" name="UserName" required>
</div>
<div>
	 
     <label><h4>Email</h4></label>
     <input type="email" id="email" name="Email"  title="Invalid Email Address"required>

</div>	 
<div >
     
     <label><h4>Password</h4></label>
     <input type="password" id="password" name="password" required>
</div>
<div >
     
     <label><h4>Confirm Password</h4></label>
     <input type="password" id="Cpassword" name="Cpassword" required>
</div>
<div class="log">
	 <br>
     <input type="submit" value="Submit" onclick="fun()" id="button" name="button">
</div>



<a href="forgotpassword.php"><h4 id="submit">Forgot Password</h4></a>
</form>
</center>
</body>

</html>
