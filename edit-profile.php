<?php 
session_start(); 
if(!isset($_SESSION['email'])){
    header('Location: login.php');
    exit();
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/edit-profile.css">
    <title>Edit Profile</title>
</head>
<body>
     <!-- EL NAV -->
     <nav>
        <ul class="nav">
            <li>
            <img class="icono-dev" src="/imgs/dev.jpg" alt="">
            </li>
            <li class="user-info">
                <!-- datos del usuario -->
                  <?php echo $_SESSION['name'] ?> 
                  <!-- icono -->
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg> 

                <form action="close.php"> <button type="submit">Cerrar</button> </form>
            </li>
        </ul>
    </nav>
    <!-- fin del nav -->
    <!-- informacion del usuario para editar  -->
    <div class="padre">
    <div class="user-edit-info">
        <div class="container-user">
            <div class="container-change-info">
                    <p>Change Info</p>
                    <p>Changes will be reflected to every services</p>
            </div>

            <form action="editaction.php" class="form-edit" method="post">
            <div class="photo">
                <input type="file" class="file"> <p> CHANGE PHOTO</p>
            </div>
           <div class="name">
               Name<input type="text" class="nombre" placeholder="Enter your name..." name="name" value="<?php echo $_SESSION['name'] ?> ">
           </div>
            <div class="bio">
                Bio<input type="text" class="bio-input" placeholder="Enter Your Bio" name="bio" value="<?php echo $_SESSION['bio'] ?>">
            </div>
            <div class="phone">
                Phone<input type="number" class="phone-input" placeholder="Enter your phone" name="phone" value="<?php echo $_SESSION['phone'] ?>">
            </div>
            <div class="email">
                Email<input type="email" class="email-input" placeholder="Enter your email" name="email" value="<?php echo $_SESSION['email'] ?>">
            </div>
            <div class="password">
                Password<input type="password" class="password-input" placeholder="Enter your password" name="password" value="<?php echo $_SESSION['password'] ?>">
            </div>
            <div class="containerboton">
                 <button type="submit" class="botton-save">Save</button>
            </div>
            </form>
           
        </div>
    </div>
    </div>
</body>
</html>

<?php } ?>