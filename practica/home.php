<?php 
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
    exit();
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="closesesion.php">
    <p>Bienvenido <?php echo $_SESSION['user'] ?> </p>
    <button type="submit">Cerrar sesion</button>
    </form>
</body>
</html>

<?php } ?>