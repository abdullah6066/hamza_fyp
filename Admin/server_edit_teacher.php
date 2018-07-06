<?php
// server_edit.php

include "teacher_class.php";

$search_id = $_REQUEST['r_id'];
$new_dp = $_REQUEST['dp_name'];
$new_pwd = $_REQUEST['pwd'];

$user = new teacher();
$user->connectDB();

$result = $user->update_user( $search_id, $new_dp, $new_pwd );



?>