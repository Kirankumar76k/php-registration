<?php

$n=$_POST['txtUser'];

$p=$_POST['txtPwd'];


include("database.php");

$query="insert into user(name,pass) values('$n','$p')";

$rs=mysqli_query($conn,$query);
if($rs)
	{
		echo "<h1 align=center>User created successfully!!!</h1>";
        }
else
	{
		echo "<h1 align=center>Ufffffffffffff!!!</h1>";
	}
?>