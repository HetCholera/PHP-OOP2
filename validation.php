<?php
session_start();
header('location:login.php');
$con=mysqli_connect("localhost","root");

if($con==TRUE)
	echo "connect";
else
	echo "not connect";

mysqli_select_db($con,'het');

$name=$_POST['nm'];
$pass=$_POST['pw'];

$result="SELECT *FROM stud1 WHERE name='$name' && password='$pass' ";
$r=mysqli_query($con,$result);
$num=mysqli_num_rows($r); 
if($num==1)
   $_SESSION['username']=$name;
    header('location:home.php');
   // echo "duplicate data";
else

  //$j="insert into stud1(name , password) VALUES('$name','$pass')";
//mysqli_query($con,$j);
?>