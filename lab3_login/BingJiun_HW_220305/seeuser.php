<?php

$host = "localhost:3306";
$username = "josepkl7_loginuser";
$password = "loginuser78987";
$database = "ooplogin";

try{
	$connect = new PDO('mysql:host=localhost:3306;dbname=josepkl7_users',$username,$password);
	
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	$query = "SELECT * FROM users";
	$data = $connect->query($query);
	echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Email</th>
		</tr>';
	foreach($data as $row){
		echo '<tr>
			<td>'.$row["users_id"].'</td>
			<td>'.$row["users_uid"].'</td>
			<td>'.$row["users_email"].'</td>
		</tr>';
	}
	echo '</table>';
}
catch(PDOException $error){
	$error->getMessage();
}
