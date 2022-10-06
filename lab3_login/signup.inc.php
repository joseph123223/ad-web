<?php

if(isset($_POST["submit"])){
	
	$uid=$_POST["uid"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	
	include "dbh.classes.php";
	include "signup.classes.php";
	include "signup-contr.classes.php";
	
	$signup = new SignupContr($uid,$email,$pwd);
	
	$signup->signupUser();
	
	header("location: signupsuc.php?success");
	exit();
}
else{
	header("location: signup.php?error.inc");
	exit();
}