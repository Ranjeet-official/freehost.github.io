<?php
include 'config/db.php';


$id = $_GET['id'];
$sql = "DELETE FROM `admin_panel` WHERE id='$id'";

mysqli_query($conn,$sql);
header("location: registration.php");

?>
