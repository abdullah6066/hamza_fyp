<?php
// server_delete.php

include "Student_class.php";

$search_id = $_REQUEST['id'];

$user = new student();
$user->connectDB();

$result = $user->delete_by_ID( $search_id );
?>