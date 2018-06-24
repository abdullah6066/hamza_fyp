<?php
// server_add_user.php
// session_start();
// if( isset( $_SESSION['user']) )
// 	;
// else
// 	header("location: home.php?msg=login first");

	
include "teacher_class.php";

$tname = $_REQUEST['name'];
$tid = $_REQUEST['id'];
$pwd = $_REQUEST['pwd'];
$dpt = $_REQUEST['dpt'];

$t = new teacher();
$t->connectDB();

$t->add_user( $tname,  $tid, $pwd, $dpt);

?>