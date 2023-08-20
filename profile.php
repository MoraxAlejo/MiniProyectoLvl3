<?php
session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit();
    } else {
require_once "conexiondatabs.php";
$id = $_SESSION['id'];
$stmt = $mysqli->query("SELECT id, photo FROM users WHERE id = '$id'  ;");
while ($row = $stmt->fetch_assoc()) {
    $dataImg = base64_encode($row["photo"]);

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
                    <li class="user-info" id="close">
                        <!-- datos del usuario -->
                        <div class="imagen-container-nav"><?php echo "<img class='imagen-profile-nav' src= 'data:image/jpg;base64, $dataImg' alt=''>" ?></div>
                        <?php echo $_SESSION['name'] ?>
                        <!-- icono -->
                        <button id="flecha"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg></button>
                    </li>
                    <!-- select informacion -->

                </ul>
                <div class="options invisible" id="nav">
                    <li class="options-li">
                        <div class="profile">
                            <div class="profile-container"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <a href="profile.php">My Profile</a>
                            </div>


                        </div>

                        <div class="group-chat">
                            <div class="group-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                </svg>
                                Group chat
                            </div>
                        </div>

                        <div class="logout">
                            <div class="hr">
                                <hr>
                            </div>
                            <form action="/actions/close.php">
                                <button class="boton-close"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg>Logout</button>
                            </form>
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

                            <div class="imagen-container"><?php
                                                            echo "
            <img class='imagen-profile' src='data:image/jpg;base64, $dataImg' alt='image'>
            ";
                                                        }
                                                            ?> </div>
                        </div>

                    </div>
                    <div class="name">
                        <div class="con-name">
                            <p>NAME</p>
                            <p><?php echo $_SESSION['name'] ?></p>
                        </div>

                    </div>
                    <div class="bio">
                        <div class="con-bio">
                            <p>BIO</p>
                            <p><?php echo $_SESSION['bio'] ?></p>
                        </div>

                    </div>
                    <div class="phone">
                        <div class="con-phone">
                            <p>PHONE</p>
                            <p><?php echo $_SESSION['phone'] ?></p>
                        </div>
                    </div>

                    <div class="mail">
                        <div class="con-mail">
                            <p>EMAIL</p>
                            <p><?php echo $_SESSION['email'] ?></p>
                        </div>
                    </div>
                    <div class="password">
                        <div class="con-pasword">
                            <p>PASSWORD</p>
                            <p>************</p>
                        </div>

                    </div>
                </div>

            </div>

        </body>
        <script src="aparecer.js"></script>

        </html>
    <?php } ?>