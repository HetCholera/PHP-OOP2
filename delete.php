<?php
	include "config.php";
	$id=$_REQUEST['id'];
	$del="DELETE FROM `stud` WHERE id='$id'";
	$result=mysqli_query($con,$del);
	header("location:table.php");
?>