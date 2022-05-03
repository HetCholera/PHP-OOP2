<?php 
    	include "config.php";
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $contact=$_REQUEST['contact'];
        $update="UPDATE `stud` SET `name`='$name',`contact`='$contact' where `id`='$id'";
        $result=mysqli_query($con,$update);
        header("location:table.php");
?>