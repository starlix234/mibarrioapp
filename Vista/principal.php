<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Vecino registrar</title>
</head>
<body>
<section class="container-principal">
    <main class="contenedor">
    <article>
     <form  class="form" method="post">
                  <?php include("../Controlador/controlador-sesiones.php")?>
                    <img src="../assets/img/sinfondo.gif">
                    <input type="text" id="rut" class="texto" name="rut" placeholder="rut" value="" >              
                    <label for="contrasena"></label>
                    <input id="clave" name="clave" placeholder="clave" value="" type="password">               
                    <input id="iniciar" class="boton" name="iniciar" class="iniciar" value="Iniciar sesion" type="submit">
                    <a href="../Vista/vista-reguistrar-vecino.php"> Registrarse</a>

     </form>         

    </article>
</main>


</section>

  
</body>
</html>

