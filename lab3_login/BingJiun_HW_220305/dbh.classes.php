<?php

class Dbh{
	protected function connect(){
		try{
			$username = "josepkl7_loginuser";
			$password = "loginuser78987";
			$dbh = new PDO('mysql:host=localhost:3306;dbname=josepkl7_users',$username,$password);
			return $dbh;
		}
		catch(PDOException $e){
			print "Error!:" .$e->getMessage()."<br/>";
			die();
		}
	}
}