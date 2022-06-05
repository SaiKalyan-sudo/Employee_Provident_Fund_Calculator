<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style>
body{
	
	background-image:url('image3.jpeg');
	background-color:white;
	background-size:cover;
	background-attachment:fixed;
	
}




#password,#user{
	border-radius:5px;
	
}

#password{
	margin-right:17px;
}

div{
    color:black;
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	margin-left:0px;
		
}

#button{
	
	background-color:#FAAC21;
	font-family:"Times New Roman", Times, serif;
	font-size:20px;
	border-radius:20x;
	cursor:pointer;
}
#password{
	margin-left:20px;
}
#head{
	background-color:#FAAC21;
	padding:1px;
	border-radius:5px;
	margin-top:0px;
  	margin-bottom: 0px;
  	margin-right: 500px;
  	margin-left: 500px;
  	font-size:50px;
  	font-family:"Times New Roman", Times, serif;
  	
}
h1{
	background-color:#FBC700;
	padding:1px;
	border-radius:5px;
	margin-top:0px;
  	margin-bottom: 0px;
  	margin-right: 500px;
  	margin-left: 500px;
  	font-size:50px;
  	font-family:"Times New Roman", Times, serif;

	
	}

</style>
</head>

<body>
<center>
<form method="post" action="process7.php">
<div><h1>Recover Your Password</h1></div>
<div >
     <br>
     <label><h4>User Name</h4></label>
     <input type="text" id="user" name="user" required/>
 </div>


<div >
     <br>
     <label><h4>New Password</h4></label>
     <input type="password" id="password" name="password" required/>
 </div>
<div>
	 <br>
	 <input type="submit" value="submit" id="button" name="button"/>
</div>
</form>
</center>
</body>

</html>
