<?php
include '../../server/connection/conexion.php';
include '../../server/security/seguridad.php';
?>
<?php if (!empty($user)) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include "../resources/assets/meta.html" ?>
    </head>

    <body>
        <?php include "../resources/partials/header--main.html" ?>
        <div class="container-fluid text-light" style="background-color: #0D0D0D;">
            <div class="grid text-center">
                <div class="mb-5">
                    <h1>Acciones</h1>
                </div>
                <div>
                    <div class="row">
                        <?php foreach (mysqli_query($conx, "SELECT * FROM acciones") as $data) : ?>
                            <div class="col-md-4 d-flex justify-content-center align-items-center mb-5">
                                <div class="card" style="width: 18rem; background-color: #202020;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $data['action']?></h5>
                                        <p class="card-text">Descripcion<?php echo $data['description']?></p>
                                        <p class="card-text">Fecha<?php echo $data['date_action']?></p>
                                        <p class="card-text">Ip<?php echo $data['ip']?></p>
                                        <a href="#" class="btn btn-primary">Administrador:<?php echo$data['administrator']?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../resources/partials/footer--default.html" ?>

    </html>
<?php else : ?>

    <!DOCTYPE html>
    <!--html sino ha iniciado sesion-->
    <html>

    <body>
        <script>
            setTimeout(alertFunc, 1000);

            function alertFunc() {
                location.replace("../login");
            }
        </script>
    </body>

    </html>

<?php endif; ?>