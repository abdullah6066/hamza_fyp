<?php



?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	#floatL{
		float: left;
	}
	#floatR{
		float: right;
	}
	#div1_head{

		background-image: url(home.png);
		font-size: 25px
	}
	#div2_head{

		margin: 10px
	}
	#text_dec{
		text-decoration: none ;color: white;
		
	}
	#signin{
		font-size: 20px;border-radius: 8px;color: white;
		margin: 10px;
	}
	#signindix{
		text-align: right;
		align-items: right;
		padding: 5px;
	}
    #form_div1{
    	margin-top: 180px;
    	text-align: center;
    	color: white;
    	margin-left: 250px;
    	margin-right: 250px;
    	font-size: 65px;
    }
    #option{
    	font-size: 20px ;
    	margin-left: 35px;
    	padding: 12px;
    	border-radius: 5px
    }

    #adds{
    	padding: 10px ;
    	background-color: rgb(200,200,200);
    	margin-left: 20px;
    }
    #find{
    	font-size: 35px;
    	margin-left: 30px;
    	border-radius: 10px;
    	width: 10%
    }
    #add_catagory{
    	font-size: 25px;
    	margin-left: 10px;
    	border-radius: 10px;
    	width: 10% ;
    	padding: 10px
    }
    #navcontainer ul
    {
    	margin: 0;
    	padding: 0;
    	list-style-type: none;
    	border-radius: 10px;
    }

    #navcontainer ul li { 
    	float:left;
    	border-radius: 10px;
    }

    #navcontainer ul li a
    {
    	text-decoration: none;
    	padding-left:  1em;
    	color: #fff;
    	padding: 20px;
    }

    #navcontainer ul li a:hover
    {
    	color: black;
    	margin-bottom: 10px;
    }

    #navcontainer ul li ul {
    	display: none;
    	margin-bottom: 10px;
    }

    #navcontainer li:hover ul {
    	display: block;
    	position: absolute;
    	top:225px;
    	padding: 15px;
    }
    #navcontainer ul li ul {
    	wdth:450px;
    	background-color:red;
    }
    #navcontainer ul li ul a:hover{
    	color:blue;
    	margin-bottom: 10px;

    }
    #navcontainer li:hover li {
    	float: none;
    }

	</style>
	<title>ADMIN</title>
</head>
<body style="background-color: rgb(200,202,202);margin: .0em;font-family: calibri">


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
				<br/><br/>
			</div>
		</div>
	</div>
	<div style="margin-right: 250px;margin-left: 250px;background-color: rgb(247,247,248);margin-top: -30px">
			<a href="../index.php">	<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 50px;margin-right: 60px;">Home</div></a>
				<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 10px;margin-right: 60px;" id="navcontainer">
                      <ul>
			          <li ><a id="text_dec" href=""><span >Teacher</span></a>
                       <ul>
              
				        <li  style="margin-top: 10px;"><a href="Add_teacher.php">ADD teacher<br></a></li>
				      	<li style="margin-top: 10px;"><a href="Client_search_by_id_teacher.php">Delete teacher<br></a></li>
				        <li style="margin-top: 10px;"><a href="#">Update Teacher<br></a></li>
				      <li style="margin-top: 10px;"><a href="#">View All teachers<br></a></li>
				       
			          </ul> 
			          </li>
			            </ul>
				</div>
				<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 10px;margin-right: 60px;" id="navcontainer">
                      <ul>
			          <li><a id="text_dec" href=""><span >Student</span></a>
                       <ul>
				        <li><a href="Add_student.php">ADD Student<br></a></li>
				        <li style="margin-top: 10px;"><a href="Client_search_by_id_student.php">Delete Student<br></a></li>
				        <li style="margin-top: 10px;"><a href="#">Update Student<br></a></li>
				       <li style="margin-top: 10px;"><a href="#">View All Student<br></a></li>
			          </ul> 
			          </li>
			            </ul>
				</div>
				<div style="padding: 20px;margin-top: -20px"> About us</div>
			</div>
</section>

	<div style="background-color: rgb(200,202,202);">
		
			
			<div style="background-color: white;margin-left: 250px;margin-right: 250px">
				<div style="float: left; margin-left: 40px">
					<br/>
					<span style="color: red;font-size: 24px">Admin Menu</span>
					<br/>
					<br/>
					<span style="font-size: 20px">London Business Sale office</span>
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
					<div style=" border-radius: 1px;">
				      <img style="border-radius: 5px" src="ue.png">
				</div>
				</div>

			</div>
				        
		    </div>
	


</body>
</html>