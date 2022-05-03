<?php
	include "config.php";
	// print_r($_REQUEST);
	if(isset($_REQUEST['name'])) 
	{
	$name=$_REQUEST['name'];
	$contact=$_REQUEST['contact'];
	$sql="INSERT INTO `stud`(`name`,`contact`)VALUES('$name','$contact')";
	$result=mysqli_query($con,$sql); 
	header("location:form.php");
	}
?>
