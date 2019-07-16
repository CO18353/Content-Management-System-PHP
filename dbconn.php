<?php
	$name=$_REQUEST["name"];
	$usr=$_REQUEST["usr"];
	$pass=$_REQUEST["pass"];
	$city=$_REQUEST["city"];
	$clg=$_REQUEST["clg"];
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ccet");
	$ins="insert into user1(username,password,name,college,city) values('$usr','$pass','$name','$clg','$city')";
	if(mysqli_query($conn,$ins)) //or die(mysqli_error($conn));
		header("location:login.php?r=Succesfully Registered");
	else
		header("location:login.php?r=Registeration Failed");
?>