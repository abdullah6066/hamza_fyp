<?php
session_start();
if( isset( $_SESSION['user']) )
   { $buttonname= $_SESSION['user'] ;
    $id= $_SESSION['id'];
    }
else
    header("location: ../index.php?msg=login first");


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


		#text_dec{
		text-decoration: none ;color: white;
	}
	</style>
	<title>ADMIN</title>
</head>
<body style="background-color: rgb(200,202,202);margin: .0em;font-family: calibri">


	<section >
		<div style="background-color: black;">
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
			<a href="../index.php">	<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 50px;margin-right: 60px;">Home</div></a>
				<div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 10px;margin-right: 60px;" id="navcontainer">
                      <ul>
			          <li ><a id="text_dec" href=""><span >Course</span></a>
                       <ul>
              
				        <li  style="margin-top: 10px;"><a href="../Add_course\Add_course.php">ADD Course<br></a></li>
				      	<li style="margin-top: 10px;"><a href="#">Delete Course<br></a></li>
				        <li style="margin-top: 10px;"><a href="#">Update Course<br></a></li>
				      <li style="margin-top: 10px;"><a href="#">View All Courses<br></a></li>
				       
			          </ul> 
			          </li>
			            </ul>
				</div>
				<div style="padding: 20px;margin-top: -20px"> About us</div>
			</div>
</section>
	</section>

	<div style="background-color: rgb(200,202,202);">
		

		<div style="background-color: white;margin-left: 250px;margin-right: 250px">

			<div style="padding: 0px; margin-left:150px;height: 700px">
				<div style="padding: 0px;height: 100% ">
					<div style="float: left;margin-bottom:4% ;margin-left:-5% ;margin-top:4% ">
	<table>
			
           <tr>
           	<td style="padding: 10px">
           		<span style="font-size: 45px">Welcome</span>
           	</td>
           </tr>
			<tr >
			<td style="border-style: solid;height: 400px;border-radius: 5px">
				<!---!week1---->
				<img width="900px" src="../Admin\ue.png">
			</tr>
	
			
	</table>
</div>
<div>
	<table style="position: fixed;margin-left: 48%;margin-top:5%">
		<tr>
			<td style=" border-style: solid;width: 200px;height: 200px;border-radius: 5px;padding:25px">
				<div style="margin-top: -75%" ><span style="font-size: 35px">My courses</span><br><br><br>
					<span style="font-size: 25px;margin-left: 0px">
                                    <?php
                                    include "course_class.php";

                                    $user = new course();
                                    $user-> connectDB();
                                    $result = $user->search_by_TID( $id );

                                    $output1 = "";
                                    ?>
                                    	<?php
                                                    
                                    foreach ($result as $row) 
                                    {
                                        $output1 .="<form action='../Course_view\course_teacher.php'>
                                        <input type='submit' name='course' value='$row[1]'><br>
                                        
                                        </form>
                                        ";
                                        $course= $row[1];
                                        $_SESSION['name']=$course; 
                                    }
                                    ?>

                                    <?php

                                    echo $output1;

                                    ?>
                                </span></a>
                                    
				</div>
				
			</td>
		</tr>
		
	</table>

</div>
<div>
	<table style="position: fixed;margin-left: 48%;margin-top:20%">
		<td>
			<td style=" width: 300px;height: 150px;border-radius: 5px">
				<iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;height=250&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=abdullah.asif6066%40gmail.com&amp;color=%2329527A&amp;ctz=Indian%2FMaldives" style="border:solid 1px #777" width="250" height="250" frameborder="0" scrolling="no" ></iframe>
			</td>
		</td>
	</table>

</div>
					



				</div>
			</div>

		</div>

	</div>
	


</body>
</html>