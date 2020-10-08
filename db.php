<?php 

$DB_SERVER="localhost";
$DB_USER="gohomeng_db_user";
$DB_PWD="4T5RxsDOX1PeOX!f4a%8";
$DB_NAME="gohomeng_web_db";


$con = new mysqli($DB_SERVER,$DB_USER,$DB_PWD,$DB_NAME);

if (mysqli_connect_errno()){
	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 die();
 }


?>