<?php
   $con =mysqli_connect('localhost','root','');
   if(!$con)
   {
       echo "Not Connected to server";
   }
   $kp=mysqli_select_db($con,'database10');//aruguments are connection and database name
   if(!$kp)
   {
      echo "Database not Connected";
   }    

	$Name = $_POST['p1'];
	$Athaar = $_POST['p2'];
	$Pan	= $_POST['p3'];
	//$regex = '/^([A-Za-z])+([0-9])+(@{1})*([A-Za-z0-9])+(.{1})([a-z]{3}$)/';
	$regex = '/^([0-9]{16})/';
	$regex1	= '/^([A-Z]{5})+([0-9]{5})/';
	if(!preg_match($regex,$Athaar))
	{
    echo '<script>alert("Athar is not in valid pattern")</script>';
    header("refresh:1; url=kyc.php");

    }
    elseif(!preg_match($regex1,$Pan))
    {
    echo'<script>alert("Pan is not in valid pattern")</script>';
	header("refresh:1; url=kyc.php");

    }
	else{
	$sql= "INSERT INTO kyc2(name,aathar,pan) VALUES('$Name','$Athaar','$Pan')";
    echo '<script>alert("Inserted succesfully")</script>'; 
    header("refresh:1; url=kyc.php");
    if(!mysqli_query($con,$sql))
    {
    echo "not Inserted";
    }
    else
    {
   		
    }
	}
?>