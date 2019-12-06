<?php 

require_once("config.php");

class Database {


	public $connection;
	public $db;

	function __construct(){

     $this->db = $this->open_db_connection();


	}




	public function open_db_connection(){


	// $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// 	$db_link = mysqli_connect($db_host, $db_user, $db_pass) or die("Could not connect to database server");  
// mysqli_select_db($db_name, $db_link) or die("Could not select database"); 



	if($this->connection->connect_errno) {

	die("Database connection failed badly" . $this->connection->connect_error);


			}

		return $this->connection;



		}

	public function query($sql) {

	$result = $this->db->query($sql);

	$this->confirm_query($result);

	return $result; 


	}

	private function confirm_query($result){


		if(!$result) {

			die("Query Failed" . $this->db->error);

		}

	}

	public function escape_string($string) {


	 return $this->db->real_escape_string($string);

	 return $escaped_string;


	}



	public function the_insert_id() {

	return $this->db->insert_id;

	}





}  // End of Class Database


$database = new Database();



 ?>