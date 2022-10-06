<?php
$servername='localhost:3306';
$username="josepkl7_loginuser";
$password="loginuser78987";
 
try
{
    $con=new PDO("mysql:host=localhost:3306;dbname=josepkl7_users",$username,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo 'connected';
}
catch(PDOException $e)
{
    echo '<br>'.$e->getMessage();
}
     
?>