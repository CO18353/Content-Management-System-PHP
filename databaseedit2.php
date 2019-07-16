<?php
include("dbtemp.php");
$get=mysqli_query($conn,"select * from user1");

echo '<table>
		<tr><th>ID</th><th>Username</th><th>Password</th><th>Name</th><th>College</th><th>City</th><th>Update</th><th>Delete</th></tr>';
		while($row=mysqli_fetch_array($get))
{	
		/*echo'<script>
		function up()
		{
			var x=document.getElementsByName("'.$row[0].'");
			var len=x.length;
			for(var i=0;i<len;i++)
			{
				x[i].disabled=false;
			}
		}
		</script>';
		*/



	echo '<form action="up.php" method="post"><tr><td><input type="text" id="id" value="'.$row[0].'" name="id" /></td><td><input type="text" id="username" value="'.$row[1].'"name="usr" /></td><td><input type="text" id="password" value="'.$row[2].'" name="pass" /></td><td><input type="text" id="name" value="'.$row[3].'"name="name" /></td><td><input type="text" id="college" value="'.$row[4].'"name="clg"/></td><td><input type="text" id="city" value="'.$row[5].'"name="city"/></td><td><input type="submit" value="Update"/></td><td><a href="delete.php?id='.$row[0].'">X</a></td></tr></form>';
}
echo '</table>';

?>