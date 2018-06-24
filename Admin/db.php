<?php
// db.php

class db{
	private $host;
	private $dbname;
	private $id;
	private $pwd;

	protected $con;

	function connectDB(){

	try{
		$this->con = new PDO("mysql:host=localhost;dbname=exam_generator", "root", "");
		}
		catch(PDOException $e){
			echo "DB Errrrr";
		}

	}
}



?>