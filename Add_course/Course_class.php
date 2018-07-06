<?php
include "teacher_class.php";


class course extends db
{
	private $C_name;
	private $C_code;
    private $CR; 
    private $tid;  
    private $day;
    private $month; 
    

	function __construct(){
    $day=date("d");
    $month=date("m");
	}

	function add_user($t1, $t2, $t3,$t4){
		$this->C_name = $t1;
		$this->C_code= $t2;
		$this->CR = $t3;
		$this->tid=$t4;
		$this->day=date("d");
		$this->month=date("F");
		$day=date("d");
        $month=date("F");

	       	
		$sql_stmt = "insert into  course (C_name, C_code, CR,TID,day,month) values ('$t1' ,'$t2', '$t3','$t4','$day','$month')";

		if ( $this->con->exec( $sql_stmt))
			return true;
		else
			return false;
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
	function search_by_TID( $t1 ){
		$sql_stmt = "select * from course where TID=$t1";	
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