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
 	$first_name = $_POST['first_name'];
 	$last_name = $_POST['last_name'];
 	$email = $_POST['email'];
 	$phone_no = $_POST['phone_no'];
 	$address = $_POST['address'];

	$sql_query = "INSERT INTO contact_table(first_name,last_name,email,phone_no,address) 
	VALUES('$first_name','$last_name','$email','$phone_no','$address')";

	if (mysqli_query($conn, $sql_query)) 
	{
		header("Location: contact.html");
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>