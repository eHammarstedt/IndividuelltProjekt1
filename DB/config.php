<?php
    include './DB/textIds.php';

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "individualProject";

	// Create connection

	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	
	//get things from db
	function getTextFromDb($id){
		global $conn;
        $getContentFromDb = "SELECT content FROM pageTexts WHERE id = {$id}";

        $result = $conn->query($getContentFromDb);
        if ($row = $result->fetch_array()) {
	        if (is_array($row)) {
	        	return $row["content"];
	        }
    	}

        return "sorry, something went wrong!";
	}
?>