<?php
session_start();




$con = mysqli_connect('localhost','root','password',);

mysqli_select_db($con, 'user_registraion');

$name = $_POST['Username'];  
$email = $_POST['Email'];
$password = $_POST['password'];

$s = "select * from user_table where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

	if($num == 1)
	 {
		echo" username Already taken";
	 }
	else
	{
		$reg = " insert into user_tabke(name,email,password) values ('$name', '$email', '$password')";
		mysqli_query($con, $reg);
		echo" registration successful";
	}
?>