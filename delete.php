<?php
	include("dbtemp.php");
	$id=$_REQUEST["id"];
	$del="delete from user1 where id=$id";	
	mysqli_query($conn,$del);
	header("location:databaseedit2.php");
?>