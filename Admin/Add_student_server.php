<?php
// server_add_user.php
// session_start();
// if( isset( $_SESSION['user']) )
// 	;
// else
// 	header("location: home.php?msg=login first");

	
include "student_class.php";

$sname = $_REQUEST['sname'];
$roll = $_REQUEST['sroll'];
$pwd = $_REQUEST['pwd'];
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$gender = $_REQUEST['gender'];
$mail = $_REQUEST['email'];
$pro = $_REQUEST['pro'];
$smes = $_REQUEST['sm'];
$section = $_REQUEST['sec'];

$s = new student();
$s->connectDB();

$s->add_user( $sname,  $roll, $pwd, $pro, $smes, $section, $day, $month, $year, $gender, $mail);

?>