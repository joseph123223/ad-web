<?php
	session_start();
?>
<html>
<head>
	<h2>Welcome!</h2>
	<?php
		if(isset($_SESSION["userid"])){
			echo "Welcome User:"."&nbsp". $_SESSION["useruid"];
			
	?>
			<br><br>
			<br><br><a href="seeuser.php">Check all Users</a><br><br>
			<br><br><a href="logout.inc.php">Log out</a><br>
	<?php
		}
	?>
</head>