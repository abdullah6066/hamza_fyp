<?php
// server_delete.php

include "Teacher_class.php";

$search_id = $_REQUEST['id'];

$user = new teacher();
$user->connectDB();

$result = $user->delete_by_ID( $search_id );
?>