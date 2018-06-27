<?php
// server_signin.php
session_start();


include "Course_class.php";

$Cname = $_REQUEST['name'];
$Ccode = $_REQUEST['code'];
$ch = $_REQUEST['cr'];
$tname = $_REQUEST['tname'];

$user = new course();
$user->connectDB();
$result = $user->add_user($Cname,$Ccode,$ch,$tname);

if($result == true)
{

	header("location: ../home.php?msg= added");	
}
else
		header("location: ../home.php?msg= not added");


?>