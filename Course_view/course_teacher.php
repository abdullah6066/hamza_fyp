<?php





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		 #float{

	float: left;
    }
     #text_dec{
	text-decoration: none ;

    }
    #floatL{
		float: left;
	}
	#floatR{
		float: right;
	}
	#div1_head{

		background-color:rgb(0,130,180);
		font-size: 25px
	}
	#div2_head{

		margin: 10px
	}
	#text_dec{
		text-decoration: none ;color: white;
		margin-left: 20px;
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
    	margin-left: 30px;
    	border-radius: 10px;
    	width: 10% ;
    	padding: 10px
    }
    #navcontainer ul
    {
    	margin: 0;
    	padding: 0;
    	list-style-type: none;
    }

    #navcontainer ul li { 
    	float:left;
    }

    #navcontainer ul li a
    {
    	text-decoration: none;
    	padding-left:  1em;
    	color: #fff;
    }

    #navcontainer ul li a:hover
    {
    	color: red;
    }

    #navcontainer ul li ul {
    	display: none;
    }

    #navcontainer li:hover ul {
    	display: block;
    	position: absolute;
    	top:50px;
    	padding: 5px;
    }
    #navcontainer ul li ul {
    	wdth:450px;
    	background-color:green;
    }
    #navcontainer ul li ul a:hover{
    	color:blue
    }
    #navcontainer li:hover li {
    	float: none;
    }
    #socialmedia{
    	height: 30px;
    	margin-top: 30px;
    	margin-left: 50px;
    }
    #footerstart{
    	margin-left: 450px;
    	font-size: 30px;
    }
  
    #footerlogo{
    height: 70px ;
    padding-right: 50px;
    padding-left: 50px;
    padding-top: 10px;
    padding-bottom: 10px;

    }
	</style>
</head>
<body style="margin: .0em;font-family: calibri" >
<!--header-->
	<div style="font-family: calibri;position: fixed;width: 100%" >
	<div id="div1_head">
		<div id="floatL" style="padding: 10px">
						<a href="index.html"> <img style="border-radius: 50px" height="40px" src="../logo1.png"> </a>
		</div>
		<div id="floatL" style="font-size: 30px;color: white;margin-top: 10px">
			Exam Generator
		</div>
		<div id="signindix">
			<div id="navcontainer">
				  <ul><li style="margin-top: 10px"><a href="about_us.html" id="text_dec" style="margin-right: 20px;margin-left: 1360px;" > <span>About Us</span></a></li></ul>
				<a href="Admin\Admin_menu.php"><input style="padding: 6px" id="signin" type="button" name="" value=" Sign out"></a>
			</div>
			
		</div>
	</div>
</div>
<div style="float: left;margin-bottom:4% ;margin-left:12% ;margin-top:10% ">
	<table>
				<?php
				
                

                for ($i=0; $i <16 ; $i++) { 
                 ?>	<tr >
             
			<td style="border-style: solid;width: 22%;height: 350px;border-radius: 5px">
				<!---!week1---->
				<div  style="margin-top: -230px ;padding: 15px;padding-left: 25px;font-size: 25px">20 june to 26 june</div>
				<br>
			</tr>
			<tr>
				<td>
					<br><br>
				</td>
			</tr>
		
             <?php    }?>
                


			
	</table>
</div>
<div>
	<table style="position: fixed;margin-left: 70%;margin-top:10%">
		<td>
			<td style=" border-style: solid;width: 300px;height: 450px;border-radius: 5px">
				<div style="margin-top: -75%" ><span style="font-size: 25px">My courses</span></div>
			</td>
		</td>
	</table>

</div>
<div>
	<table style="position: fixed;margin-left: 70%;margin-top:35%">
		<td>
			<td style=" width: 300px;height: 250px;border-radius: 5px">
				<iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;height=250&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=abdullah.asif6066%40gmail.com&amp;color=%2329527A&amp;ctz=Indian%2FMaldives" style="border:solid 1px #777" width="300" height="250" frameborder="0" scrolling="no" ></iframe>
			</td>
		</td>
	</table>

</div>
</body>
</html>