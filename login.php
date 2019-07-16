<?php
//	setcookie("countc","0",time()+86400);
?>
<html>
<head><title>Login Page</title></head>
<body>
	<form action="dbconn.php" method="post">
		<fieldset>
			<legend>Register</legend>
		<label>Enter Name</label><input type="text" name="name"/><br/>
		<label>Enter Name of Your College</label><input type="text" name="clg"/><br/>
		<label>Enter Name of Your City</label><input type="text" name="city"/><br/>
		<label>Enter Username</label><input type="text" name="usr"/><br/>
		<label>Enter Password</label><input type="password" name="pass"/><br/>
		<input type="submit" value="Register"/>
		</fieldset>
	</form>
	<?php
		if (isset($_REQUEST["r"]))
			echo $_REQUEST["r"];
	?>
	<form action="check.php" method="post">
		<fieldset>
			<legend>Login</legend>
		<label>Enter Username </label><input type="text" name="usr"/><br/>
		<label>Enter Password &nbsp</label><input type="password" name="pass"/><br/>
		<input type="submit" value="Login"/>
		<!--<?php echo $_COOKIE["countc"]; ?>-->
		</fieldset>
	</form>
</body>
</html>
<?php
	if(isset($_REQUEST["m"]))
		echo $_REQUEST["m"];
?>