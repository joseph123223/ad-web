<html>
<head>
	<h2>Create a new account</h2><br>
</head>
<body>
	<section class="signup-form">
		<div class="index-login-signup">
			<form action="signup.inc.php" method="post">
				<input type=""text name="uid" placeholder="Username"><br><br>
				<input type=""text name="email" placeholder="E-mail"><br><br>
				<input type=""password name="pwd" placeholder="Password"><br><br><br>
				<button type="submit" name="submit">Sign Up</button>&nbsp&nbsp&nbsp&nbsp;
				<?php
					if(isset($_SESSION["userid"]))
					{
				?>
						<a href="logout.inc.php">Log out</a><br>
				<?php
					}
					if($_SERVER['QUERY_STRING']=="error.inc"){
						echo "Something Wrong";
					}
					if($_SERVER['QUERY_STRING']=="error=emptyinput"){
						echo "Empty Input!";
					}
					if($_SERVER['QUERY_STRING']=="error=invalidUid"){
						echo "Invalid UserName!";
					}
					if($_SERVER['QUERY_STRING']=="error=invalidEmail"){
						echo "Invalid E-mail!";
					}
					if($_SERVER['QUERY_STRING']=="error=uidTakenCheck"){
						echo "Username or E-mail already existed!";
					}
				?>
				<br><br><br><br>
			</form>
		</div>
	</section>
</body>
</html>
