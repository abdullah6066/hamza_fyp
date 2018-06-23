<?php
include "Teacher_class.php";

class course extends db
{
	private $C_name;
	private $C_code
        private $CR;    
        $user = new teacher();

	function __construct(){

	}

	function add_user($t1, $t2, $t3,$t4){
		$this->T_name = $t1;
		$this->C_code= $t2;
		$this->CR = $t3;
                
                $obj=user->search_by_ID($t4);
                 
                if( $obj!=NULL)
                {

	        $Teacher = $obj->fetchObject();

	        $Tid= $Teacher->TID;
	       	
                }
  
		$sql_stmt = "insert into  teacher (C_name, T_ID, T_password,T_dept,TID) values ('$t1' ,'$t2', '$t3', '$t4','$Tid')";

		if ( $this->con->exec( $sql_stmt ) )
			header("location: ../index.php?msg=course Added");
		else
			header("location: ../index.php?msg=Issue. course Not added");
	}

	function viewall(){
		$sql_stmt = "select * from course";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;
	}

	function search_by_name( $t1 ){
		$sql_stmt = "select * from course where C_name=$t1";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;	
	}

	function delete_by_name($t1 ){
		$sql_stmt = "delete from course where C_name=$t1";	
		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Deleted");
		else
			header("location: edit_del_all.php?msg=Not Deleted");
	}

	function update_course($t1, $t2, $t3,$t4){
		$sql_stmt = "update course set C_code='$t2', CR='$t3' where C_name =$t1";	
		

		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Edit Done");
		else
			header("location: edit_del_all.php?msg=Edit Not Done");	


	}










}



?>