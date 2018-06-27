<?php
// server_signin.php
session_start();


include "Teacher_class.php";

$T_ID = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];

$user = new teacher();
$user->connectDB();
$result = $user->login_check( $T_ID, $pwd );

if( $result->rowCount()>0){

	$row = $result->fetchObject();

	$_SESSION['user'] = $row->T_name;
	header("location: ../home\home.php");	
}
else
		header("location: ../index.php?msg=Login first");


?>