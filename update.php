<?php 
include 'config/db.php';

 
if (isset($_POST['adduser'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $sql = "UPDATE `admin_panel` SET `id`='$id',`name`='$name',`phone`='$phone',`email`='$email' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    header("location: registration.php");
     

}

?>