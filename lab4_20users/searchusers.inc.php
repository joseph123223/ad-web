<?php

if(isset($_POST["submit"])){
	
	$email=$_POST["email"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$cphone=$_POST["cphone"];
	$hphone=$_POST["hphone"];
	
	include 'dbh.con.php';
	
	if(!empty($_POST['email'])){
        $email = $_POST['email'];
        $stmt = $con->prepare("select * from users where users_email like '%$email%'");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$data){
            echo '<tr>No data for this user!</tr>';
		}
        else{
			echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Cellphone</th>
			<th>Homephone</th>
		</tr>';
			foreach($data as $row){
				echo '<tr>
					<td>'.$row["users_id"].'</td>
					<td>'.$row["users_uid"].'</td>
					<td>'.$row["users_email"].'</td>
					<td>'.$row["users_firstname"].'</td>
					<td>'.$row["users_lastname"].'</td>
					<td>'.$row["users_address"].'</td>
					<td>'.$row["users_cellphone"].'</td>
					<td>'.$row["users_homephone"].'</td>
				</tr>';
			}
			echo '</table>';        
		}
    }
	else if(!empty($_POST['cphone'])||!empty($_POST['hphone'])){
        $cphone=$_POST["cphone"];
		$hphone=$_POST["hphone"];
        $stmt = $con->prepare("select * from users where users_cellphone like '%$cphone%' or users_homephone like '%$hphone%'");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$data){
            echo '<tr>No data for this user!</tr>';
		}
        else{
			echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Cellphone</th>
			<th>Homephone</th>
		</tr>';
			foreach($data as $row){
				echo '<tr>
					<td>'.$row["users_id"].'</td>
					<td>'.$row["users_uid"].'</td>
					<td>'.$row["users_email"].'</td>
					<td>'.$row["users_firstname"].'</td>
					<td>'.$row["users_lastname"].'</td>
					<td>'.$row["users_address"].'</td>
					<td>'.$row["users_cellphone"].'</td>
					<td>'.$row["users_homephone"].'</td>
				</tr>';
			}
			echo '</table>';        
		}
    }
	else if(!empty($_POST['fname'])&&!empty($_POST['lname'])){
        $fname=$_POST["fname"];
		$lname=$_POST["lname"];
        $stmt = $con->prepare("select * from users where users_firstname like '%$fname%' and users_lastname like '%$lname%'");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!$data){
            echo '<tr>No data for this user!</tr>';
		}
        else{
			echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Cellphone</th>
			<th>Homephone</th>
		</tr>';
			foreach($data as $row){
				echo '<tr>
					<td>'.$row["users_id"].'</td>
					<td>'.$row["users_uid"].'</td>
					<td>'.$row["users_email"].'</td>
					<td>'.$row["users_firstname"].'</td>
					<td>'.$row["users_lastname"].'</td>
					<td>'.$row["users_address"].'</td>
					<td>'.$row["users_cellphone"].'</td>
					<td>'.$row["users_homephone"].'</td>
				</tr>';
			}
			echo '</table>';        
		}
    }
    else{
        $searchErr = "Please enter the information";
    }
	?>
	<br><br><a href="searchusers.php">Go back</a><br><br>
	<?php
}
else{
	header("location: signup.php?error.inc");
	exit();
}