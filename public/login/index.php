<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Data-->
    <meta charset="utf-8">
    <title>SitePersist</title>
    <meta charset="UTF-8">
    <meta name="author" content="Darkpersist(Mateo & Sebastian)">
    <meta name="description" content="Bookings System for Reservation spaces and electronics devices">
    <meta name="keywords" content="Bookings, SitePersist, Site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/assets/favicon.ico">
    <!--Import-->
    <script src="https://kit.fontawesome.com/5780471e07.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if (!empty($icon) || !empty($title) || !empty($text)): ?>
            <script type="text/javascript">
                Sweetalert2.fire({
                    icon:"<?php echo($icon) ?>", 
                    title:"<?php echo($title)?>", 
                    text:"<?php echo($text)?>",
                    html:"<?php echo($html)?>",
                    imageUrl:"<?php echo($img)?>",
                    timer:"5000",
                    timerProgressBar:"True",
                    allowOutsideClick:"True",
                    allowEscapeKey:"True",
                    confirmButtonText:"Aceptar",
                    confirmButtonColor:"#1A5276",
                });
            </script>
                <?php if ($icon=="success"): ?>
                    <script type="text/javascript">
                        setTimeout(alertFunc, 6000);
                        function alertFunc() {
                            location.replace("../main");
                        }
                    </script>
                <?php endif; ?>
    <?php endif; ?>
    <!---Login-->
    <div class="bg_img">
        <div class="content">
            <header>Iniciar sesión</header>
            <form action="#">
                <div class="field">
                    <span class="fa fa-user"></span>
                        <input type="text" required placeholder="Ingrese Usuario" />
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key" id="pass-key" name="pass-key" onblur="verifyPassword()" required placeholder="Contraseña"/>
                    <i id="success" class="fas fa-check-circle"></i><i id="error" class="fas fa-exclamation-circle"></i><i id="warning" class="fas fa-exclamation-triangle"></i>
                    <span class="show"></span>
                </div>
                <div class="pass">
                    <a href="#">¿Olvidaste la contraseña?</a>
                </div>
                <div class="field">
                    <input type="submit" value="Acceder">
                </div>
            </form>
        </div>
    </div>
    <script>
        <?php include "main.js"; ?>
    </script>
</body>

</html>
