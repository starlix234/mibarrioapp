  

    <header class="main-header">
        <nav class="main-nav">
            <a href="#" class="logo">
                <img src="../assets/img/logo2.png"  class="ancho" alt="es un logo que representa una comunidad de vecinos de colores morado,rosa,azul">
            </a>
            <?php include("../Controlador/controlador-datos-principal.php")?>

            <input type="checkbox" id="nav-toggle" class="nav-toggle" style="display: none;">
            
            <div class="nav-menu-container">
                <ul class="nav-links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Solicitudes</a></li>
                    <li><a href="#">Proyectos</a></li>
                     <?php
                            if(!isset($_SESSION)) session_start();
                            if(isset($_SESSION['id_usuario'])) {
                                $rol = isset($_SESSION['id_rol']) ? $_SESSION['id_rol'] : null;
                                if($rol == 1) {
                                    echo '<li><a class="nav-link" href="../Vista/vista-admin.php">Panel Admin</a></li>';
                                } elseif($rol == 2) {
                                    echo '<li><a class="nav-link" href="../Vista/vista-jefe-vecinos.php">Panel Jefe Vecinos</a></li>';
                                } elseif($rol == 3) {
                                    echo '<li><a class="nav-link" href="../Vista/vista-miembro-vecino.php">Panel Miembro Vecino</a></li>';
                                }
                                echo '<li><a class="nav-link" href="../Controlador/controlador-cerrar-sesion.php">Cerrar sesión</a></li>';
                            } else {
                                echo '<li><a class="nav-link" href="../Vista/principal.php">Login</a></li>';
                            }
                            ?>
                </ul>                
            </div>

            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </nav>
    </header>



