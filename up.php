<?php
	$id=$_REQUEST["id"];
	$name=$_REQUEST["name"];
	$usr=$_REQUEST["usr"];
	$pass=$_REQUEST["pass"];
	$city=$_REQUEST["city"];
	$clg=$_REQUEST["clg"];
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ccet");
	$ins="update user1 set username='$usr', password='$pass', name='$name', college='$clg', city='$city' where id=$id";
	mysqli_query($conn,$ins);
	//if() //or die(mysqli_error($conn));
	//	header("location:databaseedit2.php");
	//else
	//	die(mysqli_error($conn));
?>