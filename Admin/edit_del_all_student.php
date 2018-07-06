<?php
// edit_del_all.php
// session_start();


// if(  isset( $_SESSION['user'] ) )
// 	;
// else
// 	header("location: home.php?msg=login first");



include "student_class.php";

// no get

$user = new student();
$user->connectDB();

$result = $user->viewall();
?>
<!-- 
<div align="right" style="margin-right: 100px"> <?php echo "You are:" . $_SESSION['user']; ?>    <a href="logout.php"> logout </a> </div> -->


<?php
$output1 = "";
$output1 = "<h2 align=center> All User Data </h2>    <table border=1 align=center style='border-collapse: collapse'> 
<tr> <th>ID</th>   <th>Name</th>   <th>Email</th>    <th>Password</th>  <th>  </th>    <th> </th>   </tr>
";

foreach ($result as $row) {
	$output1 .= "<tr><td> $row[0]</td>"  . "<td>$row[1]</td>" .  "<td>$row[2]</td>" . "<td>$row[3] </td> 
		<td>  <a href='client_edit.php?id=$row[0]'  > Edit </a>   </td>
		<td>  <a href='server_delete.php?id=$row[0]' > Delete </a>   </td>
	</tr>" ;
}
$output1 .= "</table>";
echo $output1;



?>