<?php 
$correo = $_POST["correo"];
$password = $_POST["contrasena"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo' and pasword = '$password'");
    $resultado = $consulta->fetch_assoc();
   
    if ($resultado['email'] == $correo && $resultado['pasword'] == $password) {
        session_start();
        $_SESSION['password'] = $resultado['pasword']; 
        $_SESSION['user'] =  $resultado['email'];
        
        header("Location: home.php");
        exit();
    }
} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>
