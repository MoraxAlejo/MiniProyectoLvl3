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
        $_SESSION['email'] =  $resultado['email'];
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['phone'] =  $resultado['phone'];
        $_SESSION['bio'] =  $resultado['biografia'];
        $_SESSION['name'] =  $resultado['name'];
        
        header("Location: profile.php");
        exit();
    } else {
        header("Location: login.php");
    }


} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}
?>
