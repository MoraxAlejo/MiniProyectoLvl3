<?php 
$correo = $_POST["correo"];
$password = $_POST["contrasena"];

try {
    $mysqli = new mysqli("localhost", "root", "", "miniproyecto");
    $consulta = $mysqli->query("SELECT * FROM `users` WHERE email = '$correo'");
    $resultado = $consulta->fetch_assoc();
   
    if (password_verify($password, $resultado['pasword'])) {
        session_start();
        $_SESSION['password'] = $resultado['pasword']; 
        $_SESSION['email'] =  $resultado['email'];
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['phone'] =  $resultado['phone'];
        $_SESSION['bio'] =  $resultado['biografia'];
        $_SESSION['name'] =  $resultado['name'];
        header("Location: ../profile.php");
        exit();
    } else {
        echo "Correo o contraseña equivocados";
        die();
        
    }

} catch(mysqli_sql_exception $e) {
    echo "Error" . $e->getMessage();
}

?>
