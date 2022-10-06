<html>
<head>
	<h2>Search Users</h2>
	<h4>Please choose one of the methods below:</h4>
</head>
<body>
	<section class="searchusers-form">
		<div class="searchusers">
			<form action="searchusers.inc.php" method="post">
				<h4>1. Search User by Name: </h4>
				<input type=""text name="fname" placeholder="First Name"><br><br>
				<input type=""text name="lname" placeholder="Last Name"><br><br><br><br>
				<h4>2. Search User by Email: </h4>
				<input type=""text name="email" placeholder="E-mail"><br><br><br><br>
				<h4>3. Search User by Phone Number: </h4>
				<input type=""text name="cphone" placeholder="Cell Phone number">
				<h6>Or </h6>
				<input type=""text name="hphone" placeholder="Home Phone Number"><br><br><br><br>
				<button type="submit" name="submit">Search</button>&nbsp&nbsp&nbsp&nbsp;
				
				<a href="index.php">Go back</a><br>
				<br><br><br><br>
			</form>
		</div>
	</section>
</body>
</html>
