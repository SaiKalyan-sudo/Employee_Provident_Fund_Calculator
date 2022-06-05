<?php
   $con =mysqli_connect('localhost','root','');
   if(!$con)
   {
       echo "Not Connected to server";
   }
   $kp=mysqli_select_db($con,'database');//aruguments are connection and database name
   if(!$kp)
   {
      echo "Database not Connected";
   }    
   $username=$_POST['UserName'];
   $email=$_POST['Email'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['Cpassword'];
   $regex='/^([A-Za-z])+([0-9])+(@{1})*([A-Za-z0-9])+(.{1})([a-z]{3}$)/';
   if( !preg_match($regex,$email))
   {
   echo '<script>alert("Email is not in pattern")</script>';
   }
   elseif($password!=$confirmpassword )
   {
   echo'<script>alert("Entered passwords are  not same")</script>';
   }
   else
   {
   
   $sql= "INSERT INTO user(username,email,password,confirmpassword) VALUES('$username','$email','$password','$confirmpassword')";
   echo '<script>alert("Registerd succesfully")</script>'; 
    header("refresh:1; url=loginpage.php");
   if(!mysqli_query($con,$sql))
   {
   echo "not Inserted";
   }
   else
   {
   
   }
   }
  
   
//two passwords must and sholud same
/*you have to check the enter details with data base whether
its existed already in the table */
?>