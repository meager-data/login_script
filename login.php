<?php
include 'connection.php';

if(isset($_POST['username'])&&isset($_POST['password']))
{
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
	
$password_hash = md5($password);
	
	if(!empty($username)&&!empty($password))
	{
	$query = "SELECT `ID`,`username` FROM `members` WHERE `username`='$username' AND `password`='$password_hash'";
	
		if($query_run = mysqli_query($con, $query))
		{
			$query_num_rows = mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
			echo "Invalid username/password combination!&nbsp;<a href='index.php'>Go Back</a>";
			}
			
			else if($query_num_rows==1)
			{
			$user_id = mysqli_fetch_assoc($query_run);
			$_SESSION['user_id']=$user_id["ID"];
			header('location: index.php');
			}
		}	
	}
	else
	{
	echo 'You must supply a username and password <a href="index.php" >Go Back</a>';
	}
}
?>