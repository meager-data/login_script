<?php
include 'connection.php';
//This function retrieves a specified field from the database table
function getuserfield($con,$field){
		$query = "SELECT `".$field."` FROM `members` WHERE `ID`='".$_SESSION['user_id']."'";
		
		if($result = mysqli_query($con, $query)){
			while($row = mysqli_fetch_assoc($result)){
				return $row[$field];
			}
		}
}
$_SESSION['username'] = getuserfield($con,'username');
?>