<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
} else {
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
                    <?php echo $_SESSION['name'] ?>
                    <!-- icono -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                </li>
                <!-- select informacion -->

            </ul>
            <div class="options">
                <li class="options-li">
                    <div class="profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        My Profile

                    </div>

                    <div class="group-chat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        </svg>
                        Group chat

                    </div>

                    <div class="logout">
                      <div class="hr"><hr></div> 
                          <button class="boton-close">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg>Logout</button>
                    </div>
                </li>
            </div>
        </nav>

        <div class="padre">
            <div class="texto">
                <p>Personal Info</p>
                <p>Basic info, like your name and photo</p>
            </div>

            <div class="container-user-info">
                <div class="profile-edit">
                    <div class="container-profile">
                        <p>Profile</p>
                        <p>Some info may be visible to other people</p>
                    </div>
                    <div class="contenedor-edit"> <a href="/edit-profile.php"> <button class="edit-info">Edit</button></a></div>
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
                        <input type="text" value="<?php echo $_SESSION['name'] ?>">
                    </div>

                </div>
                <div class="bio">
                    <div class="con-bio">
                        <p>BIO</p>
                        <input type="text" value="<?php echo $_SESSION['bio'] ?>">
                    </div>

                </div>
                <div class="phone">
                    <div class="con-phone">
                        <p>PHONE</p>
                        <input type="number" value="<?php echo $_SESSION['phone'] ?>">
                    </div>
                </div>

                <div class="mail">
                    <div class="con-mail">
                        <p>EMAIL</p>
                        <input type="email" value="<?php echo $_SESSION['email'] ?>">
                    </div>
                </div>
                <div class="password">
                    <div class="con-pasword">
                        <p>PASSWORD</p>
                        <input type="password" value="<?php echo $_SESSION['password'] ?>" readonly>
                    </div>

                </div>
            </div>

        </div>

    </body>

    </html>
<?php } ?>