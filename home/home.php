<?php





  ?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	
</script>
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
<head>
	<title>Home</title>
</head>
<body style="margin: .0em;font-family: calibri" >
<!--header-->
	<div style="font-family: calibri" >
	<div id="div1_head">
		<div id="floatL" style="padding: 10px">
						<a href="index.html"> <img style="border-radius: 50px" height="40px" src="../logo1.png"> </a>
		</div>
		<div id="floatL" style="font-size: 30px;color: white;margin-top: 10px">
			Exam Generator
		</div>
		<div id="signindix">
			<div id="navcontainer">
				  <ul><li style="margin-top: 10px"><a href="about_us.html" id="text_dec" style="margin-right: 20px;margin-left: 1400px;" > <span>About Us</span></a></li></ul>
				<a href="Admin\Admin_menu.php"><input style="padding: 6px" id="signin" type="button" name="" value="Admin"></a>
			</div>
			
		</div>
	</div>
</div>
<!---header--->
<div>
  <div id="floatL" style="margin-top: 50px;margin-left: 100px">
   <img src="../e1.jpg"> 
  </div>    
  <div id="floatR" style="">
    <div style="margin-top: 50px;margin-right: 100px;border-style: solid;border-radius: 5px;">
        <span style="font-size: 35px">My Courses</span>
        <div style="margin: 20px" >
            <table>
                <tr>
                    <td>
                        <span id="format"> 
                                    <?php
                                    include "course_class.php";

                                    $user = new course();
                                    $user-> connectDB();
                                    $t1=1;
                                    $result = $user->search_by_TID( $t1 );

                                    $output1 = "";
                                    $output1 = " <div>";

                                    foreach ($result as $row) 
                                    {
                                        $output1 .= "
                                        <tr> 
                                        <td>$row[1]</td>
                                        </tr>";
                                    }
                                    $output1 .= " </div>";


                                    echo $output1;

                                    ?>

                                </span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
  </div>
  <div>
  </div>
</div>

<div style="margin-top: 400px;margin-left: 100px">
    <a href="../Add_course\Add_course.php"> <input type="button" name=""  value="Add course"></a>
</div>

<!---footer--->
<div id="div1_head" style="margin-top: 440px">
	<img height="30px" style="border-radius: 25px; margin-left: 1800px;margin-top: 3px" src="../logo1.png">
</div>
<!---footer--->




</body>
</html>