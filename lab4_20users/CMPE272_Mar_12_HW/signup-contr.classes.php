<?php

class SignupContr extends Signup{
	
	private $uid;
	private $email;
	private $pwd;
	private $fname;
	private $lname;
	private $address;
	private $cphone;
	private $hphone;
	
	public function __construct($uid,$email,$pwd,$fname,$lname,$address,$cphone,$hphone){
		$this->uid=$uid;
		$this->pwd=$pwd;
		$this->email=$email;
		$this->fname=$fname;
		$this->lname=$lname;
		$this->address=$address;
		$this->cphone=$cphone;
		$this->hphone=$hphone;
	}
	
	private function emptyInput(){
		$result;
		if(empty($this->uid)||empty($this->email)||empty($this->pwd)||empty($this->fname)||empty($this->lname)||empty($this->address)||empty($this->cphone)||empty($this->hphone)){
			$result=false;
		}
		else{
			$result=true;
		}
		return $result;
	}
	
	private function invalidUid(){
		$result;
		if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
			$result=false;
		}
		else{
			$result=true;
		}
		return $result;
	}
	
	private function invalidEmail(){
		$result;
		if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
			$result=false;
		}
		else{
			$result=true;
		}
		return $result;
	}
	
	private function uidTakenCheck(){
		$result;
		if(!$this->checkUser($this->uid,$this->email)){
			$result=false;
		}
		else{
			$result=true;
		}
		return $result;
	}
	
	public function signupUser(){
		if($this->emptyInput()==false){
			// echo "Empty Input!";
			header("location: signup.php?error=emptyinput");
			exit();
		}
		if($this->invalidUid()==false){
			// echo "Invalid User ID!";
			header("location: signup.php?error=invalidUid");
			exit();
		}
		if($this->invalidEmail()==false){
			// echo "Invalid E-mail!";
			header("location: signup.php?error=invalidEmail");
			exit();
		}
		if($this->uidTakenCheck()==false){
			// echo "Username taken!";
			header("location: signup.php?error=uidTakenCheck");
			exit();
		}
		$this->setUser($this->uid,$this->pwd,$this->email,$this->fname,$this->lname,$this->address,$this->cphone,$this->hphone);
	}
}