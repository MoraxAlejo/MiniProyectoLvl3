<?php
session_start();
$name = $_POST["name"];
$bio = $_POST["bio"];
$phone =  $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$id = $_SESSION['id'];
require_once "conexiondatabs.php";

$contrahash = password_hash($password,PASSWORD_DEFAULT);

if (!empty($name) || !empty($bio) || !empty($phone) || !empty($password)) {
    $query = "UPDATE `users` SET ";
    if (!empty($name)) {
        $query .= "`name` = '$name', ";
        $_SESSION['name'] = $name;
    }
    if (!empty($bio)) {
        $query .= "`biografia` = '$bio', ";
        $_SESSION['bio'] = $bio;
    }
    if (!empty($phone)) {
        $query .= "`phone` = '$phone', ";
        $_SESSION['phone'] = $phone;
    }
    if (!empty($password)) {
        $query .= "`pasword` = '$contrahash', ";
        $_SESSION['pasword'] =  $password;
    }
    $query = rtrim($query, ", ");
    $query .= " WHERE `users`.`id` = $id ;";
  
    $mysqli->query($query);
}

header("Location: profile.php");


?>