<?php
class MyBlob{
	const DB_HOST = 'localhost';
	const DB_NAME = 'enrollment';
	const DB_USER = 'root';
	const DB_PASSWORD = '';

	private $conn = null;

	//Open the imagebase connection
	public function __construct(){
		// open imagebase connection
		$connectionString = sprintf("mysql:host=%s;dbname=%s;charset=utf8",
				MyBlob::DB_HOST,
				MyBlob::DB_NAME);

		try {
			$this->conn = new PDO($connectionString,
					MyBlob::DB_USER,
					MyBlob::DB_PASSWORD);

		} catch (PDOException $pe) {
			die($pe->getMessage());
		}
	}

	//update the files table with the new blob from the file specified by the filepath
	function updateBlob($idno,$filePath) {	
		$blob = fopen($filePath,'rb');

		$sql = "UPDATE student
				SET
				image = :image
				WHERE idno = :idno";

		$stmt = $this->conn->prepare($sql);

		$stmt->bindParam(':image',$blob,PDO::PARAM_LOB);
		$stmt->bindParam(':idno',$idno);

		return $stmt->execute();

	}

	//select image from the the files
	public function selectBlob($idno) {
		$sql = "SELECT 
				image
				FROM student
				WHERE idno = :idno";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute(array(":idno" => $idno));
		$stmt->bindColumn(1, $image, PDO::PARAM_LOB);

		$stmt->fetch(PDO::FETCH_BOUND);

		return array(
				"image" => $image);

	}

	//close the imagebase connection
	public function __destruct() {
		// close the imagebase connection
		$this->conn = null;
	}
}


