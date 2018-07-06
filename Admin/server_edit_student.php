<?php
// server_edit.php

include "student_class.php";

$search_id = $_REQUEST['r_id'];
$new_dp = $_REQUEST['dp_name'];
$new_pwd = $_REQUEST['pwd'];

$user = new student();
$user->connectDB();

$result = $user->update_user( $search_id, $new_dp, $new_pwd );



?>