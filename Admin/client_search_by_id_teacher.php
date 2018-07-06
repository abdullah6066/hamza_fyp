<?php
// search_by_id_client.php
// session_start();
// if( isset( $_SESSION['user']) )
// 	;
// else
// 	header("location: home.php?msg=login first");

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div align="right" style="margin-right: 100px"> <!-- <?php echo "You are:" . $_SESSION['user']; ?> -->    <a href="logout.php"> logout </a> </div>

	<form action="server_search_by_id_teacher.php" method="get">
		<h3> Search By ID </h3>
		ID <input type="text" name="uid" />
		<input type="submit" name="">
	</form>
</body>
</html>