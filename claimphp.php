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

$ename = $_POST['text1'];
$fname = $_POST['text2'];
$DOB   = $_POST['text3'];
$mobile= $_POST['text4'];
$aathar= $_POST['text5'];
$pan   = $_POST['text6'];
$accountno = $_POST['text7'];
$IFS = $_POST['text8'];
$Bname = $_POST['text9'];
$memberid = $_POST['text10'];
$dojepf = $_POST['text11'];
$dojeps = $_POST['text12'];
$doeepf = $_POST['text13'];

$syear = $_POST['text14'];
$lyear = $_POST['text15'];
$syearint = (int)$syear;
$lyearint = (int)$lyear;

$diff = $lyearint-$syearint;
if($diff <= 2)
{
echo '<script>alert("You are not available to claim")</script>';
header("refresh:1; url=Claim.php");

}
else
{
	$sql= "INSERT INTO claim(ename,fname,DOB,mobile,aathar,pan,accountno,ifs,Bname,memberid,dojepf,dojeps,dojeepf) VALUES('$ename','$fname','$DOB','$mobile','$aathar','$pan','$accountno','$ifs','$Bname','$memberid','$dojepf','dojeps','dojeepf')";
    echo '<script>alert("Inserted succesfully")</script>'; 
    header("refresh:1; url=Claim.php");
     if(!mysqli_query($con,$sql))
    {
    echo "not Inserted";
    }
    else
    {
   		
    }


}
?>