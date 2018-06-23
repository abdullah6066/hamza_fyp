<?php


?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
  #textbox{
    	width: 350px;
    	font-size: 30px;
    	border-radius: 5px;

    }
    #floatL{
	float: left;
    }

	</style>
	<title></title>
</head>
<body style="background-color: rgb(20,138,163)">

	<div style="margin-left: 400px;margin-top: 30px;font-family: calibri;background-color: white">
	<div id="floatL" style="margin-left: 350px;">
		<div style="background-color: white">
		<form style="padding: 20px" action="server_signin.php" method="post">
			<div style="font-size: 65px;color:  rgb(20,138,163);">Log in</div>
			<div><hr></div>
			<div style="font-size: 35px">Username</div>
			<div><input id="textbox" type="textbox" name="username" value="" placeholder="e.g Abdullah"></div>
			<div style="font-size: 35px">Password</div>
			<div ><input id="textbox" type="Password" name="pwd" value=""></div>
			<div id="floatL"><input type="checkbox" name=""></div>
			<div >Remember me</div>
			<div style="margin-top: 10px"><input style="background-color: rgb(20,138,163);font-size: 25px;border-radius: 5px" type="submit" name="" value="Log in"></div>
			<br>
			<br>
			<div><hr></div>
	  
		</form>
		</div>
	</div>
</div>

</body>
</html>