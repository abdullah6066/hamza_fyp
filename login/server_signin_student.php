<?php
// server_signin.php
session_start();


include "Student_class.php";

$roll_no = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];

$user = new student();
$user->connectDB();
$result = $user->login_check( $roll_no, $pwd );

if( $result->rowCount()>0){

	$row = $result->fetchObject();

	$_SESSION['user'] = $row->S_name;
	header("../location: index.php");	
}
else
		header("location: home.php?msg=Login first");


?>