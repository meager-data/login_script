<?php
//Without this, warnings & notices are reported. Look into solving these warnings & notices
error_reporting(E_ERROR);

ob_start();
session_start();


//Change the below to match your credentials
$mysql_host = "localhost";
$mysql_database = "login_script";
$mysql_user = "root";
$mysql_password = "";

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
?>