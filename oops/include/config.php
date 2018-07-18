<?php 
	class db {
		public $host = 'localhost';
		public $user = 'root';
		public $database = 'test';
		public $pwd = '';
		public $con;

		public function __construct() {
			$this->con = mysqli_connect( $this->host, $this->user, $this->pwd, $this->database );
			if (mysqli_connect_errno()) {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			return $this->con;
		}

	}

?>

