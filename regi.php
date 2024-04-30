<?php
$servername="localhost:3307";
$username="root";
$password="";
$database_name="user_registration";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if (!$conn)
{
	die("connection failed:" . mysqli_connect_error());
	
}

if (isset($_POST['save']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];

	$sql_query = "INSERT INTO user_table(Name,email,password) 
	VALUES('$name','$email','$password')";

	if (mysqli_query($conn, $sql_query)) 
	{
		header("Location: index.html");
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>