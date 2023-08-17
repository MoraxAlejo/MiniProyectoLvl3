<?php

$correo = $_POST["correo"];
$password = $_POST["contrasena"];

try {
    require_once "conexiondatabs.php";
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo'");
    $resultado = $consulta->fetch_assoc();
    
    if ($resultado['email'] == "$correo") {
         echo "La Cuenta ya existe";
         die();

        
    } else {
        session_start();
        $mysqli->query("INSERT INTO users(email, pasword) VALUES ('$correo', '$password');");
        $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo' and pasword = '$password'");
        $resultado = $consulta->fetch_assoc();
        $_SESSION['password'] = $resultado['pasword'];
        $_SESSION['email'] =  $resultado['email'];
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['phone'] =  $resultado['phone'];
        $_SESSION['bio'] =  $resultado['biografia'];
        $_SESSION['name'] =  $resultado['name'];
        header("location:profile.php");
    }
} catch (mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}


?>