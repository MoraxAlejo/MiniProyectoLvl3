<?php

$correo = $_POST["correo"];
$password = $_POST["contrasena"];

try {
    require_once "../conexiondatabs.php";
    $consulta1 = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo'");
        $resultado1 = $consulta1->fetch_assoc();
    if ($resultado1['email'] == "$correo") {
         echo "La Cuenta ya existe Porfavor intente con otro correo";
         die();
    } else {
        $contrahash = password_hash($password,PASSWORD_DEFAULT);
        $mysqli->query("INSERT INTO users(email, pasword) VALUES ('$correo', '$contrahash');");
        $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo'");
        $resultado = $consulta->fetch_assoc();
        session_start();
        $_SESSION['password'] = $resultado['pasword']; 
        $_SESSION['email'] =  $resultado['email'];
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['phone'] =  $resultado['phone'];
        $_SESSION['bio'] =  $resultado['biografia'];
        $_SESSION['name'] =  $resultado['name'];
        header("location: ../edit-profile.php");
        exit();
    }
} catch (mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}



?>