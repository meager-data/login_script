<?php
include 'connection.php';
function getusername($con){
		$query = "SELECT `username` FROM `members` WHERE `ID`='".$_SESSION['user_id']."'";
		
		if($result = mysqli_query($con, $query)){
			while($row = mysqli_fetch_assoc($result)){
				return $row['username'];
			}
		}
}
$_SESSION['username'] = getusername($con);
?>