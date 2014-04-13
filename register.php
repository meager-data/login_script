<?php
include 'connection.php';

//To avoid SQL injection, add mysqli_real_escape_string
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

//To add encryption to password
$password_hash = md5($password);
if(isset($username)&&isset($password)){
	$query = "INSERT INTO members (username, password) VALUE ('$username', '$password_hash')";
	$query = mysqli_query($con, $query);

	if(!$query){
		mysql_error();
	}
	else{
		//To return to the home page after registering
		header('location: index.php');
	}
}
else{
	echo "Please enter some credentials";
}
?>