<?php
$n=$_POST['txtUser'];
$w=$_POST['txtPwd'];

include("database.php");
	$rs=mysqli_query($conn,"select * from user where name='$n' and pass='$w' ");
	if(mysqli_num_rows($rs)<1)
	{
		echo "<h1 align=center>Failed login!!!</h1>";
		exit;
	}
	else
	{
		echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
		exit;
	}

?>