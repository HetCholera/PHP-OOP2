<?php
	include "config.php";
	$id=$_REQUEST['id'];
	$sel="SELECT * FROM `stud` WHERE `id`='$id'";
	$result=mysqli_query($con,$sel);
	$row=mysqli_fetch_assoc($result);

?>
<html>
<body>
<form method="post" action="update1.php?id=<?php echo $row['id'];?>">
<table border="2">

<tr>
	<td>name</td>
	<td><input type="text" name="name" value="<?php echo $row['name']?>"></td>
</tr>
<tr>	
	<td>contact</td>
	<td><input type="number" name="contact" value="<?php echo $row['contact']?>"></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="update"></td>
	<td><input type="reset" name="reset" value="clear"></td>
</tr>	
</table>
</form>
</body>
</html>
