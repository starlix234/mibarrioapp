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
<div class="container">
 <div class="content">
 <div class="banner">
			<h2>Mi barrio</h2>
		</div>
            <form  class="form" method="post">
                  <?php include("../Controlador/controlador-sesiones.php")?>
                    <label for="usuario"></label>
                    <input type="text" id="rut" class="texto" name="rut" placeholder="rut" value="" >              
                    <label for="contrasena"></label>
                    <input id="clave" name="clave" placeholder="clave" value="" type="password">           
             
                    <input id="iniciar" class="boton" name="iniciar" class="iniciar" value="Iniciar sessión" type="submit">
                     <a href="../vista/registrar-vecino.php"> Registrarse</a>
            </form>           
    </div>
</div>    
</body>
</html>

