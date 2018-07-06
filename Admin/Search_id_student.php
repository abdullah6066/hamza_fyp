<?php



?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		

		#text_dec{
		text-decoration: none ;color: white;
	}
	</style>
	<title>ADMIN</title>
</head>
<body style="background-color: rgb(200,202,202);margin: .0em;font-family: calibri">


	<section >
		<div style="background-color: black">
			<div style="float: left;">
				<img style="margin-left: 250px;margin-top: 15px;height: 125px" src="Admin\logo.png">
			</div>
			<div style="margin: 0em" >
				<div align="right" style="margin-right: 250px">
					<br/>
					<span style="color: rgb(204,204,204); font-size: 28px">Exam Generator & Portal</span><br/><br/>
					<img src="Twitter_32x32.png"/>
					<img src="Youtube_32x32.png"/><br/><br/><br/>
					<span style="color: rgb(204,204,204); font-size: 20px;">info@tlt.communication.co.uk</span><br/>
					<br/>
					<br/><br/>
				</div>
			</div>
		</div>
		<div style="margin-right: 250px;margin-left: 250px;background-color: rgb(247,247,248);margin-top: -30px">
			<a href="Admin\Admin_menu.php"><div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 50px;margin-right: 60px;">Admin</div></a>
			<div style="padding: 20px;margin-top: -20px"> About us</div>
		</div>
	</section>

	<div style="background-color: rgb(200,202,202);">
		

		<div style="background-color: white;margin-left: 250px;margin-right: 250px">

			<div style="padding: 60px; margin-left:150px">
				<div style="padding: 40px ">
					
					<form action="server_search_by_id.php" method="get">
		            <h3> Search By ID </h3>
		            ID <input type="text" name="uid" />
		            <input type="submit" name="">
	              </form>



				</div>
			</div>

		</div>

	</div>
	


</body>
</html>