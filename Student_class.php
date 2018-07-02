<?php
include "db.php";

class student extends db
{
	private $sname;
	private $id;
	private $pwd;
	private $day;
	private $month;
	private $year;
	private $gender;
	private $email;
    private $program;
	private $smester;
	private $section;

	function __construct(){

	}

	function add_user($t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9,$t10, $t11){
		$this->name = $t1;
		$this->id = $t2;
		$this->pwd = $t3;
        $this->day = $t4;
		$this->month = $t5;
		$this->year = $t6;
		$this->gender = $t7;
		$this->email = $t8;
		$this->program = $t9;
		$this->smester = $t10;
		$this->section = $t11;
		

  
		$sql_stmt = "insert into  student (S_name, Roll_no, S_password,,S_program,S_smester,S_section,S_day, S_
		month, S_year,S_gender) values ('$t1' ,'$t2', '$t3', '$t9' ,'$t10', '$t11','$t4' ,'$t5', '$t6', '$t7' ,'$t8')";

		if ( $this->con->exec( $sql_stmt ) )
			header("location:Admin_menu.php?msg=Data Added");
		else
			header("location:Admin_menu.php?msg=Issue. Data Not added");
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