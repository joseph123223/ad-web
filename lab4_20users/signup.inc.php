<?php

if(isset($_POST["submit"])){
	
	$uid=$_POST["uid"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$address=$_POST["address"];
	$cphone=$_POST["cphone"];
	$hphone=$_POST["hphone"];
	
	include "dbh.classes.php";
	include "signup.classes.php";
	include "signup-contr.classes.php";
	
	$signup = new SignupContr($uid,$email,$pwd,$fname,$lname,$address,$cphone,$hphone);
	
	$signup->signupUser();
	
	header("location: signupsuc.php?success");
	exit();
}
else{
	header("location: signup.php?error.inc");
	exit();
}