<?php
$localhost='localhost:3306';
$username='root';
$password='';
$database_name='simple shopping cart';
$conn = new mysqli($localhost,$username,$password,$database_name);
if($conn->connect_error){
	die("Connection Failed!".$conn->connect_error);
}
?>