<?php
session_start();
if( isset( $_SESSION['user']) )
   { $buttonname= $_SESSION['user'] ;
    $id= $_SESSION['id'];
    $name= $_REQUEST['course'];
    }
else
    header("location: ../index.php?msg=login first");


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
			<a href="../index.php"><div style="float: left;background-color: red;color: white;padding: 25px;margin-top: -12px ;margin-left: 50px;margin-right: 60px;">Admin</div></a>
			<div style="padding: 20px;margin-top: -20px"> About us</div>
		</div>
	</section>

	<div style="background-color: rgb(200,202,202);">
		

		<div style="background-color: white;margin-left: 250px;margin-right: 250px">

			<div style="padding: 0px; margin-left:150px;height: 6500px">
				<div style="padding: 0px;height: 100% ">
					<div style="float: left;margin-bottom:4% ;margin-left:-5% ;margin-top:5% ">
	<table>
				<?php
				
                

                for ($i=0; $i <16 ; $i++) { 
                 ?>	<tr >
             
			<td style="border-style: solid;width: 20%;height: 350px;border-radius: 5px">
				<!---!week1---->
				<div  style="margin-top: -230px ;padding: 15px;padding-left: 25px;font-size: 25px"><?php echo date("d"); ?> &nbsp;to 26 june</div>
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
	<table style="position: fixed;margin-left: 48%;margin-top:5%">
		<tr>
			<td style=" border-style: solid;width: 200px;height: 200px;border-radius: 5px;padding:25px">
				<div style="margin-top: -75%" ><span style="font-size: 35px">My courses</span><br><br><br>
					<span style="font-size: 25px;margin-left: 0px">
                                    <?php
                                    include "../home\Course_class.php";

                                    $user = new course();
                                    $user-> connectDB();
                                    $result = $user->search_by_TID( $id );

                                    $output1 = "";
                                    ?>
                                    	<?php

                                    foreach ($result as $row) 
                                    {
                                        $output1 .= "<a href='../Course_view\course_teacher.php'>
                                        $row[1]<br></a>$name
                                        ";
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