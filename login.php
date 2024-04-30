<?php 
include 'config.php';

$servername="localhost:3307";
$username="root";
$password="";
$database_name="user_registration";

session_start();

error_reporting(0);

$conn = mysqli_connect($servername,$username,$password,$database_name);


if (isset($_SESSION['username'])) {
    header("Location: index.html");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user_table WHERE name='$name' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.html");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>






