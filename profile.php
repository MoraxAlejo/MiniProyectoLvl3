<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/profile.css">
    <title>Profile</title>
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
                  <?php echo $_SESSION['email'] ?> 
                  <!-- icono -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </li>
        </ul>
    </nav>

    <div class="padre">
        <div class="texto"><p>Personal Info</p>
        <p>Basic info, like your name and photo</p></div>
        <form action="">
        <div class="container-user-info">
            <div class="profile-edit">
                <div class="container-profile"><p>Profile</p> 
                <p>Some info may be visible to other people</p></div>
               <div class="contenedor-edit"><button class="edit-info">Edit</button></div> 
            </div>
            <div class="photo">
                <div class="con-photo">
                    <p>PHOTO</p>
                <input type="text">
                </div>
                
            </div>
            <div class="name">
                <div class="con-name">
                    <p>NAME</p>
                <input type="text">
            </div>
                
            </div>
            <div class="bio">
                <div class="con-bio">
                    <p>BIO</p>
                <input type="text">
                </div>
                
            </div>
            <div class="phone">
                <div class="con-phone">
                     <p>PHONE</p>
                <input type="number">
                </div>
            </div>
           
            <div class="mail">
                <div class="con-mail">
                 <p>EMAIL</p>
                <input type="email" value= "<?php echo $_SESSION['email'] ?>">
            </div>
            </div>
            <div class="password">
                <div class="con-pasword">
                    <p>PASSWORD</p>
                <input type="password" value="<?php echo $_SESSION['password'] ?>" readonly>
                </div>
                
        </div>
        </div>
         </form>
    </div>

</body>
</html>