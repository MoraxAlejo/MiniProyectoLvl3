<?php 
$correo = $_POST["correo"] ;
$password = $_POST["contrasena"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $mysqli->query("INSERT INTO users(email, pasword) VALUES ('$correo', '$password');");
    header("location:login.php");
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}

?>