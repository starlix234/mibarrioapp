<?php include('../Controlador/controlador-mostrar-noticia.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto con Bootstrap</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <section>
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
        </section>
    </header>

    <main>
        <section class="container mt-4">
            <?php
            if(!isset($_SESSION)) session_start();
            $esAdmin = (isset($_SESSION['id_rol']) && $_SESSION['id_rol'] == 1);
            // Botón "Publicar noticia" solo para admin, arriba de las tarjetas
            if($esAdmin) {
                echo '<div style="text-align:center; margin-bottom:20px;">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPublicarNoticia">Publicar noticia</button>
                </div>';
                // Modal con include del formulario
                echo '
                <div class="modal fade" id="modalPublicarNoticia" tabindex="-1" aria-labelledby="modalPublicarNoticiaLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalPublicarNoticiaLabel">Agregar Noticia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">';
                include('vista-agregar-noticia.php');
                echo '      </div>
                        </div>
                    </div>
                </div>';
            }
            ?>
            <div class="row justify-content-center p-4 tarjeta">
                <?php
                while($m = $mostrar->fetch_assoc()){ 
                ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg h-100">
                            <img src="<?php echo $m['imagen']; ?>" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars($m['titulo']); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo date("F d, Y", strtotime($m['fecha_publicacion'])); ?></h5>
                                <h6><?php echo htmlspecialchars($m['titulo']); ?></h6>
                                <p class="card-text"><?php echo htmlspecialchars($m['descripcion_corta']); ?></p>
                                <p class="text-muted">Por: <?php echo htmlspecialchars($m['primer_nombre'] . " " . $m['segundo_nombre'] . " " . $m['ape_paterno']); ?></p>
                                <a href="../vista/vista-interior-noticia.php?id=<?php echo $m['id_noticia']; ?>" class="btn btn-info">Leer más</a>
                                <!-- Botones según rol -->
                                <?php if($esAdmin) { ?>
                                    <form action="../Controlador/controlador-eliminar-noticia.php" method="post" onsubmit="return confirm('¿Desea eliminar esta noticia?');">
                                        <input type="hidden" name="id_noticia" value="<?php echo $m['id_noticia']; ?>">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS + Popper.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>