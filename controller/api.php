<?php
    // echo "I am here";
    $servername = "localhost";
    $database = "cas";
    $username = "root";
    $password = "";
    $id = $_GET['id'];
    
    // Create connection
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    
    if ($conn) {
        //  echo " & Connected successfully";
    }
    else
    {
        echo "something wrong";
    }

	$query = "SELECT * FROM student WHERE student_id=$id";

  $status = '200';
	$content = [];



	if ($result = mysqli_query($conn, $query)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_assoc($result)) {
		$content[] = $row; // push value to array
		}
	}

	$data = ["status" => $status, "content" => $content];

	header('Content-type: application/json');
	echo json_encode($data); // get all products in json format.

?>