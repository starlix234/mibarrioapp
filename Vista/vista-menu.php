<nav class="navbar navbar-expand-lg bg-body-tertiary bg-menu">  
                <div class="container-fluid">
                    <img class="logo" src="../assets/img/logo2.png" alt="Logo Mi Barrio">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php include("../Controlador/controlador-datos-principal.php")?>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link" href="#">Inicio</a>
                            <a class="nav-link" href="#">Postulaciones</a>
                            <a class="nav-link" href="#">Certificado</a>
                            <?php
                            if(!isset($_SESSION)) session_start();
                            if(isset($_SESSION['id_usuario'])) {
                                $rol = isset($_SESSION['id_rol']) ? $_SESSION['id_rol'] : null;
                                if($rol == 1) {
                                    echo '<a class="nav-link" href="../Vista/vista-admin.php">Panel Admin</a>';
                                } elseif($rol == 2) {
                                    echo '<a class="nav-link" href="../Vista/vista-jefe-vecinos.php">Panel Jefe Vecinos</a>';
                                } elseif($rol == 3) {
                                    echo '<a class="nav-link" href="../Vista/vista-miembro-vecino.php">Panel Miembro Vecino</a>';
                                }
                                echo '<a class="nav-link" href="../Controlador/controlador-cerrar-sesion.php">Cerrar sesión</a>';
                            } else {
                                echo '<a class="nav-link" href="../Vista/principal.php">Login</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </nav>