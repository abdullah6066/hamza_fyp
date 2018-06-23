<?php
include "db.php";

class student extends db
{
	private $name;
	private $roll;
	private $pwd;
        private $program;
	private $smester;
	private $sec;

	function __construct(){

	}

	function add_user($t1, $t2, $t3, $t4, $t5, $t6){
		$this->name = $t1;
		$this->roll = $t2;
		$this->pwd = $t3;
                $this->program = $t4;
		$this->smester = $t5;
		$this->sec = $t6;
  
		$sql_stmt = "insert into  student (S_name, Roll_no, S_password,S_program,S_smester,S_section) values ('$t1' ,'$t2', '$t3', '$t4' ,'$t5', '$t6')";

		if ( $this->con->exec( $sql_stmt ) )
			header("location: ../index.php?msg=Data Added");
		else
			header("location: ../index.php?msg=Issue. Data Not added");
	}

	function viewall(){
		$sql_stmt = "select * from student";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;
	}

	function search_by_roll( $t1 ){
		$sql_stmt = "select * from student where Roll_no=$t1";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;	
	}

	function delete_by_roll($t1 ){
		$sql_stmt = "delete from student where Roll_no=$t1";	
		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Deleted");
		else
			header("location: edit_del_all.php?msg=Not Deleted");
	}

	function update_user($t1, $t2, $t3,$t4, $t5, $t6){
		$sql_stmt = "update student set S_name='$t2', S_password='$t3', S_program='$t4', S_smester='$t5', S_section='$t6' where Roll_no=$t1";	
		

		if( $this->con->query($sql_stmt) )
			header("location: edit_del_all.php?msg=Edit Done");
		else
			header("location: edit_del_all.php?msg=Edit Not Done");	


	}

	function login_check($t1, $t2){
		$sql_stmt = "select * from admin where Roll_no='$t1' and S_password='$t2' ";	
		$ret_obj = $this->con->query($sql_stmt);
		return $ret_obj;		
	}









}



?>