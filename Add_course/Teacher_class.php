<?php
include "db.php";

class teacher extends db
{
	private $T_name;
	private $T_ID;
	private $pwd;
    private $T_dept;

	function __construct(){

	}

	function add_user($t1, $t2, $t3, $t4){
		$this->T_name = $t1;
		$this->T_ID = $t2;
		$this->pwd = $t3;
        $this->T_dept = $t4;
  
		$sql_stmt = "insert into  teacher (T_name, T_ID, T_password,T_dept) values ('$t1' ,'$t2', '$t3', '$t4')";

		if ( $this->con->exec( $sql_stmt ) )
			header("location: ../index.php?msg=Data Added");
		else
			header("location: ../index.php?msg=Issue. Data Not added");
	}

	function viewall(){
		$sql_stmt = "select * from teacher";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;
	}

	function search_by_Name( $t1 ){
		$sql_stmt = "select * from teacher where T_ID= $t1";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;	
	}

	function delete_by_ID($t1 ){
		$sql_stmt = "delete from teacher where T_ID=$t1";	
		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Deleted");
		else
			header("location: edit_del_all.php?msg=Not Deleted");
	}

	function update_user($t1, $t2, $t3,$t4){
		$sql_stmt = "update teacher set T_name='$t2', T_password='$t3', T_dept='$t4' where Roll_no=$t1";	
		

		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Edit Done");
		else
			header("location: edit_del_all.php?msg=Edit Not Done");	


	}

	function login_check($t1, $t2){
		$sql_stmt = "select * from teacher where T_ID='$t1' and T_password='$t2' ";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;		
	}









}



?>