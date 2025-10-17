<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/estilo-loguin.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Iniciar Sesión</title>
</head>
<body>

    <div class="background-container">
        </div>

    <main class="login-container">
        <form method="post" class="login-form">
            
            <div class="input-group">
                <i class="fa-solid fa-user icon"></i>
                <input type="text" id="rut" name="rut" placeholder="Rut" required>
            </div>
            
            <div class="input-group">
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" id="clave" name="clave" placeholder="Clave" required>
            </div>
            
            <?php include("../Controlador/controlador-sesiones.php")?>

            <button type="submit" name="iniciar" class="btn btn-login">iniciar Sesion</button>
            
            
            <a href="#" class="forgot-password">Olvido su clave?</a>
            
        </form>
        
        <div class="separator"></div>

        <div class="signup-section">
            <h2>Bienvenidos</h2>
            <p>No tienes cuenta</p>
            <a href="vista-reguistrar-vecino.php" class="btn btn-signup">Registrarse</a>
        </div>
    </main>

</body>
</html>

