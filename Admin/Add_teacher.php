<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body style="background-color: rgb(200,202,202);margin: .0em;">


<section >
	<div style="background-color: black">
		<div style="float: left;">
			<img style="margin-left: 250px;margin-top: 15px;height: 125px" src="logo.png">
		</div>
		<div style="margin: 0em" >
			<div align="right" style="margin-right: 250px">
				<br/>
				<span style="color: rgb(204,204,204); font-size: 28px">Call Now +44(0)2078706440</span><br/><br/>
				<img src="Twitter_32x32.png"/>
			    <img src="Youtube_32x32.png"/><br/><br/><br/>
				<span style="color: rgb(204,204,204); font-size: 20px;">info@tlt.communication.co.uk</span><br/>
				<br/>
				<br/><br>
			</div>
		</div>
	</div>
	<div style="margin-right: 250px;margin-left: 250px;background-color: rgb(247,247,248);margin-top: -30px">
			<a href="../index.php">	<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 50px;margin-right: 60px;">Home</div></a>
				<div style="padding: 20px;margin-top: -20px"> About us</div>
			</div>
</section>
	<div style="background-color: rgb(200,202,202);margin-top: 0px">
		
			
			<div style="background-color: white;margin-left: 250px;margin-right: 250px">
				<div style="float: left; margin-left: 40px">
					<br/>
					<span style="color: red;font-size: 24px">Add Teacher Form</span>
					<br/>
					<br/>
					<span style="font-size: 20px">Student Portal</span>
					<br/>
					<br/>
					<span style="color: rgb(142,142,142);"> Devenport house,
						<br/>
					      16 Pepper Street,
					    <br/>
				          London docklands,
				        <br/>
				           E14 9RP
				        <br/>
				           Phone +44(0)207 870 6446
				        <br/>
				        <br/>
				           Retail Sales Enquiry
				  </span>
				  <br/>
					<span style="color: red">
						Sales@tiltocommunications.co.uk
					</span>
				</div>
				<div style="padding: 60px; margin-left:400px">
					<div style="padding: 40px ;border-style: solid;border-radius: 1px;border-color: rgb(130,130,130);">
					<div style="float: left;margin-left: 50px;margin-top: -15px" align="right">
						<br>
						<div>Candidate's Name &nbsp:</div>
						<div style="margin-top: -5px"><span style="font-size: 8px;margin-right: 20px">(As per SSC Records)</span></div>
						<div style="margin-top: 10px">TeacherID &nbsp:</div>
						<div style="margin-top: -5px"><span style="font-size: 8px;margin-right: 20px">(As per SSC Records)</span></div>
						<div style="margin-top: 10px">Teacher Password &nbsp:</div>
						<div style="margin-top: -5px"><span style="font-size: 8px;margin-right: 20px">(As per SSC Records)</span></div>
						<div style="margin-top: 15px">Teacher Department &nbsp:</div>
						<div style="margin-top: 20px">Date of birth &nbsp:</div>
						<div style="margin-top: 20px">Gender &nbsp:</div>
						<div style="margin-top: 20px">Email &nbsp:</div>
					</div>
					<div style="font-size: 18px">

						<form action="Add_teacher_server.php" method="post">
						    <input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="text" name="name" id="" /><br/>
							<input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="text" name="id" id="" /><br/>
						    <input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="Password" name="pwd" id="" /><br/>
						    <input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="text" name="dpt" id="" /><br/>
							&nbsp;&nbsp;Day<select style="font-size: 15px;margin-left: 10px;margin-top: 18px" name="day">
								<option>DD</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
							</select>
							Month<select style="font-size: 15px;margin-left: 10px" name="month">
								<option>MM</option>
								<option>Jan</option>
								<option>Feb</option>
								<option>Mar</option>
								<option>Apr</option>
								<option>May</option>
								<option>Jun</option>
								<option>Jul</option>
								<option>Aug</option>
								<option>Sep</option>
								<option>Oct</option>
								<option>Nov</option>
								<option>Dec</option>
							</select>
							year<select style="font-size: 15px;margin-left: 10px" name="year">
								<option>YYYY</option>
								<option>2000</option>
								<option>2001</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
								<option>2005</option>
								<option>2006</option>
								<option>2007</option>
								<option>2008</option>
								<option>2009</option>
								<option>2010</option>
								<option>2011</option>
							</select>
							</span>
							<br/>
							<input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="text" name="gender" id="gender" /><br/>
							<input style=" font-size: 20px;margin-left: 10px;margin-top: 10px;" type="text" name="Email" id="Email" /><br/>
							<br/>
							<input style="margin-left: 600px" type="submit" value="Submit form" name="" onclick="">
							<input type="reset" value="Reset Form" name="">
						</form>

						
					</div>
				
				</div>
				</div>

			</div>
				  <br><br>
				  <br><br>
				  <br><br>
				  <br><br>      
		    </div>
	


</body>
</html>