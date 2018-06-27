<?php 

session_start();
if( isset( $_SESSION['user']) )
  {  $buttonname= $_SESSION['user'] ;
    $id= $_SESSION['id'] ;
    }
else
    header("location: ../index.php?msg=login first");



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div>
		<form action="Add_course_server.php" method="post">
			<div>
				ADD course 
			</div>
			<label>Course name</label>
			<input type="textbox" name="name">
			<label>Code</label>
			<input type="textbox" name="code">
			<label>CH</label>
			<input type="textbox" name="cr">
			<label> Teacher name</label>
			<input type="textbox" name="tname">

			<input type="submit" name="" value="submit">
		</form>
	</div>

</body>
</html>