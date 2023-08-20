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
                    <li class="user-info" id="close">
                        <!-- datos del usuario -->
                        <div class="imagen-container-nav"><?php echo "<img class='imagen-profile-nav' src='data:image/jpg;base64, $dataImg' alt=''>";
                                                        } ?> </div>
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


            <!-- informacion del usuario para editar  -->
            <div class="padre">
                <div class="back-container"> <svg xmlns="http://www.w3.org/2000/svg" fill="#2D9CDB" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
</svg> <a href="profile.php"> Back</a></div>
                <div class="user-edit-info">
                    <div class="container-user">
                        <div class="container-change-info">
                            <p>Change Info</p>
                            <p>Changes will be reflected to every services</p>
                        </div>

                        <form action="/actions/editaction.php" enctype="multipart/form-data" class="form-edit" method="post">
                            <div class="photo">
                                <label class="file"> <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                                    </svg> <input type="file" name="imagen" hidden></label>
                                <p> CHANGE PHOTO</p>
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
                                Password<input type="password" class="password-input" placeholder="Enter Your Password" name="password">
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
        <script src="aparecer.js"></script>



    <?php } ?>