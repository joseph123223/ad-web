<?php

class Signup extends Dbh{
	
	protected function setUser($uid,$pwd,$email,$fname,$lname,$address,$cphone,$hphone){
		$stmt=$this->connect()->prepare('INSERT INTO users (users_uid,users_pwd,users_email,users_firstname,users_lastname,users_address,users_cellphone,users_homephone) VALUES(?,?,?,?,?,?,?,?);');
		
		$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
		
		if(!$stmt->execute(array($uid,$hashedPwd,$email,$fname,$lname,$address,$cphone,$hphone))){
			$stmt=null;
			header("location: signup.php?error=stmtfailed1");
			exit();
		}
		$stmt=null;
	}
	
	protected function checkUser($uid,$email){
		$stmt=$this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ? ;');
		
		if(!$stmt->execute(array($uid,$email))){
			$stmt=null;
			header("location: signup.php?error=stmtfailed2");
			exit();
		}
		$resultCheck;
		if($stmt->rowCount()>0){
			$resultCheck=false;
		}
		else{
			$resultCheck=true;
		}
		return $resultCheck;
	}
}