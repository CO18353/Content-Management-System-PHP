<?php
	$usr=$_REQUEST["usr"];
	$pass=$_REQUEST["pass"];
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ccet");
	$sel="select * from user1 where username=\"".$usr."\" and password=\"".$pass."\"";
	$get=mysqli_query($conn,$sel);
	if(mysqli_num_rows($get)>0)
		header("location:homepage.php?n=".$usr);
	else
		header("location:login.php?m=login failed");
?>