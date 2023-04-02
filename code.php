<?php
session_start();
include 'config/db.php';

if (isset($_POST['adduser'])) {

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

$sql = "INSERT INTO `admin_panel` (`id`, `name`, `phone`, `email`, `password`, `date`) VALUES (NULL, '$name', '$phone', '$email', '$password', current_timestamp())";

$result = mysqli_query($conn,$sql);

if ($result) {
	$_SESSION['status'] = "User Added SuccessFully";
	header("location: registration.php");
}
else{
	$_SESSION['status'] = "User Registration Failed!";
	header("location: registration.php");

}

}

?>