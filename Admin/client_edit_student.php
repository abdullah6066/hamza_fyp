<?php
// client_edit.php
include "student_class.php";

$search_id = $_REQUEST['id'];

$user = new student();
$user->connectDB();

$result = $user->search_by_ID( $search_id );

foreach ($result as $row) { 
echo"
	<form action='server_edit.php' method='get'>
		Name : <input type=text value=$row[1] name=dp_name />
		Password : <input type=password value=$row[3] name=pwd />
		<input type=hidden name=r_id value=$row[0] />
		<input type='submit' />
	</form>";
}
?>