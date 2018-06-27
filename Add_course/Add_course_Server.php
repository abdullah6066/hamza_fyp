<?php
// server_signin.php
session_start();
if( isset( $_SESSION['user']) )
   { $buttonname= $_SESSION['user'] ;
    $id= $_SESSION['id'] ;
   }
else
    header("location: ../index.php?msg=login first");

include "Course_class.php";

$Cname = $_REQUEST['name'];
$Ccode = $_REQUEST['code'];
$ch = $_REQUEST['cr'];
$tname = $id;

$user = new course();
$user->connectDB();
$result = $user->add_user($Cname,$Ccode,$ch,$tname);

if($result == true)
{

	header("location: ../home\home.php?msg= added");	
}
else
		header("location: ../home\home.php?msg= not added");


?>