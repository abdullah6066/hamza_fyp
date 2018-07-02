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
				<img style="margin-left: 250px;margin-top: 15px;height: 125px" src="../Admin\logo.png">
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
		

		<div style="background-color: white;margin-left: 250px;margin-right: 250px;border-radius: 5px;padding: 30px">

			<div style=" margin-left:150px;height: 450px;border-radius: 5px">
				<div style="float: left;background-color: black;height: 250px;padding: 60px;border-radius: 5px;color: rgb(204,204,204)">
					<span style="font-size: 35px">LOGIN TEACHER</span><br><br>
					<span>ADD Lecture's</span><br><br><br>
					<span>Uploads Assignment's</span><br><br><br>
					<span>Generate Quize's</span><br><br><br>
					



				</div>
				<div style="margin-left: 350px;padding: 80px;background-color: rgb(204,204,204);margin-right: 150px;border-radius: 5px" >
					<form action="server_signin_teacher.php" method="post">
						<input style="font-size: 30px;width: 550px;border-bottom-color: black;border-style: solid;text-align: center;border-radius: 10px " type="texbox" name="username" placeholder="Teacher-ID"><br><br><br>
						<input style="font-size: 30px;width: 550px;border-bottom-color: black;border-style: solid;text-align: center;border-radius: 10px " type="Password" name="pwd" placeholder="Password">


						<input style="font-size: 25px;background-color: black;color: white;margin-left: 225px;border-radius: 5px;margin-top: 40px;padding: 10px;" type="submit" name="" value="LOGIN">
					</form>
				</div>
			</div>

		</div>

	</div>
	


</body>
</html>