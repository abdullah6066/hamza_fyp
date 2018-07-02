<?php
// server_add_user.php
// session_start();
// if( isset( $_SESSION['user']) );
// 	
// else
// 	header("location: home.php?msg=login first");

	
include "student_class.php";

$sname = $_REQUEST['name'];
$id = $_REQUEST['id'];
$pwd = $_REQUEST['pwd'];
$day = $_REQUEST['day'];
$month = $_REQUEST['month'];
$year = $_REQUEST['year'];
$gender = $_REQUEST['gender'];
$email = $_REQUEST['email'];
$program = $_REQUEST['program'];
$semester = $_REQUEST['semester'];
$section = $_REQUEST['section'];

$s = new student();
$s->connectDB();

$s->add_user( $sname, $id, $pwd, $day, $month, $year, $gender,$email, $program, $smester, $section);

?>