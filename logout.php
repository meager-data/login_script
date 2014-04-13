<?php
include 'connection.php';
mysqli_close($con);
session_destroy();
header('location: index.php');
?>