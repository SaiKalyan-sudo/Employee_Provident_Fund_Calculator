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
   $username=$_POST['user'];
   $npass=$_POST['password'];
   $dbc=mysqli_query($con,"select *from user where username='".$username."'");
    if(mysqli_num_rows($dbc)==0)
    {
    echo '<script>alert("Invalid Username and Password")</script>';
    header("refresh:1; url=forgotpassword1.php");
    }
    else{
   $sql="UPDATE user SET password='".$npass."',confirmpassword='".$npass."'";
   
   $result=mysqli_query($con,$sql);
   if($result)
   {
   echo 'Data updated';
   header("refresh:1; url=loginpage.php");
   }
   else
   {
   echo 'Data Not Updated';
   }
   }
   /*if(!mysqli_query($con,$sql))
   {
   echo "not Inserted";
   }
   else
   {
   header("refresh:1; url=recruit.php");
   }*/
	