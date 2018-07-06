<?php
// server_search_by_id.php

include "student_class.php";

$search_id = $_REQUEST['uid'];

$user = new student();
$user->connectDB();

$result = $user->search_by_ID( $search_id );

if( $result->rowCount() >0 ){
		$output1 = "";
		$output1 = "<h2 align=center> All User Data </h2>    <table border=1 align=center style='border-collapse: collapse'> 
			<tr> <th>ID</th>   <th>Name</th>   <th>Email</th>    <th>Password</th></tr>";

			foreach ($result as $row) {
				$output1 .= "<tr><td> $row[0]</td>"  . "<td>$row[1]</td>" .  "<td>$row[2]</td>" . "<td>$row[3] </td> </tr>" ;
			}
			$output1 .= "</table>";
			echo $output1;
 
}
else{
	echo "No match Found";
}

?>