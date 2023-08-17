<?php 
// UPDATE users SET email = 'aleto', pasword = 'popo' WHERE id = 3;
session_start();
$name = $_POST["name"] ; 
$bio = $_POST["bio"] ;
$phone =  $_POST["phone"] ;
$email = $_POST["email"] ;
$password = $_POST["password"] ;
$id = $_SESSION ['id'];

require_once "conexiondatabs.php"; 
$mysqli->query("UPDATE `users` SET `name` = '$name', `biografia` = '$bio', `phone` = '$phone', `email` = '$email', `pasword` = '$password' WHERE `users`.`id` = $id ;");
header("Location: profile.php");
$_SESSION['email'] =  $email;
$_SESSION['pswrd'] =  $password;
$_SESSION['phone'] =  $phone;
$_SESSION['bio'] =  $bio;
$_SESSION['name'] =  $name;

?>