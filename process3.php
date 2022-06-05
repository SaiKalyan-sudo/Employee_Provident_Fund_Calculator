<?php

   $username=$_POST['user'];
   $password=$_POST['password'];
$con =mysqli_connect('localhost','root','');
   if($con==false)
   {
    die("ERROR:could not connect.".mysqli_connect());
    }
   $kp=mysqli_select_db($con,'database');//aruguments are connection and database name
   if(!$kp)
   {
      echo "Database not Connected";
   } 
   
   
   $dbc=mysqli_query($con,"select *from user where username='".$username."' AND password='".$password."'");
    if(mysqli_num_rows($dbc)==0)
    {
    
   
    echo '<script>alert("Invalid Username and Password")</script>';
     header("refresh:1; url=loginpage.php");
    }
    else
    {
    header("Location:Frames2.php");
    
    }
     
     /*1.Forgot password page
       2.login page decoration by css
       3.password lenght range
       4.username formate*/
       
     
?>