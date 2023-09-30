<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the post ID and action type from the request
$post_id =$_GET['id'];
$action =$_GET['action'];

// Update the like or dislike count in the database
if ($action == 'like') {
    mysqli_query($conn, "UPDATE job SET likes=likes+1 WHERE id=$post_id");
} else if ($action == 'dislike') {
    mysqli_query($conn, "UPDATE job SET dislikes=dislikes+1 WHERE id=$post_id");
}

// Get the updated like and dislike counts from the database
$result = mysqli_query($conn, "SELECT likes, dislikes FROM job WHERE id=$post_id");
$row = mysqli_fetch_assoc($result);
$likes = $row['likes'];
$dislikes = $row['dislikes'];

// Return the updated like and dislike counts as JSON
echo json_encode(array('likes' => $likes, 'dislikes' => $dislikes));

// Close the database connection
mysqli_close($conn);
?>

