<?php 
session_start();
include 'connection.php';
print_r($_POST);
$id=$_SESSION['id'];
$password=$_POST['password'];
$name=$_POST['name']; 
$surname=$_POST['surname']; 
if (isset($_POST['city'])) {
	$city=$_POST['city'];
}
if (isset($_POST['age'])) {
	$age=$_POST['age'];
}
if (isset($_POST['gender'])) {
	$gender=$_POST['gender'];
}
mysql_query("UPDATE `users` SET `name`='$name',`surname`='$surname',`password`='$password',`city`='$city',`gender`='$gender',`age`='$age' WHERE id=$id");
header("location: pattern.php");
?>