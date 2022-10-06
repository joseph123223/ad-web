<?php
	session_start();
?>
<html>
<head>
	<?php
		if(isset($_SESSION["userid"])){
			echo $_SESSION["useruid"];
		}
		else{
	?>
		<h2>Log In</h2><br>
	<?php
		}
	?>
</head>
<body>
	<section class="signup-form">
		<div class="index-login-login">
			<form action="login.inc.php" method="post">
				<input type=""text name="uid" placeholder="Username"><br><br>
				<input type=""password name="pwd" placeholder="Password"><br><br><br>
				<button type="submit" name="submit">LOGIN</button>&nbsp&nbsp&nbsp&nbsp&nbsp;
				<?php
					if(isset($_SESSION["userid"]))
					{
				?>
						<a href="logout.inc.php">Log out</a><br>
				<?php
					}
					else{
				?>
						<a href="signup.php">Sign up</a><br><br><br>
				<?php
					}
					if($_SERVER['QUERY_STRING']=="error.inc"){
						echo "Something Wrong";
					}
					if($_SERVER['QUERY_STRING']=="error=emptyinputlogin"){
						echo "Empty Input!";
					}
					if($_SERVER['QUERY_STRING']=="error=usernotfound"){
						echo "User doesn't exist!";
					}
					if($_SERVER['QUERY_STRING']=="error=wrongpassword"){
						echo "Password Wrong!";
					}
				?>
			</form>
		</div>
	</section>
</body>
</html>
