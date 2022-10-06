<?php
	session_start();
?>
<html>
<head>
	<h2>Welcome!</h2>
	<?php
		if(isset($_SESSION["userid"])){
			echo "User:"."&nbsp". $_SESSION["useruid"];
			if($_SESSION["useruid"]=="Admin"){
	?>
			<br><br>
	<?php
				echo "Welcome back Admin";
	?>
			<br><br><a href="seeuser.php">Check all Users</a><br><br>
	<?php
			}
	?>
			<br><br><a href="logout.inc.php">Log out</a><br>
	<?php
		}
	?>
</head>