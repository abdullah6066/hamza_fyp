<?php
// server_signin.php
session_start();


include "Student_class.php";

$roll_no = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];

$user = new student();
$user->connectDB();
$result = $user->login_check( $roll_no, $pwd );

if( $result->rowCount() >0){

	$row = $result->fetchObject();

	$_SESSION['user'] = $row->S_name;
	header("location: ../home\home.php");	
}
else
		header("location: Sign_in_student.php?msg=Login first");


?>