<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilo-formulario.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <title>Registro Vecino</title>
</head>
<body class="fondo">
<div class="contenedor">
    
    <form action="../Controlador/Controlador-registro-general.php" method="POST" class="formulario" enctype="multipart/form-data">
       <h2 class="titulo">Registro Vecino</h2> 

        <div class="input-grupo">
            <i class="fa-solid fa-user icono"></i>
            <input type="text" class="texto" placeholder="Primer Nombre:" id="primer_nombre" name="primer_nombre" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-user icono"></i>
            <input type="text" id="segundo_nombre" class="texto" placeholder="Segundo Nombre" name="segundo_nombre" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-user-friends icono"></i>
            <input type="text" id="ape_paterno" class="texto" placeholder="Apellido Paterno:" name="ape_paterno" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-user-friends icono"></i>
            <input type="text" id="ape_materno" class="texto" placeholder="Apellido Materno:" name="ape_materno" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-calendar-alt icono"></i>
            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha_nac" class="texto" name="fecha_nac" placeholder="Fecha de Nacimiento" required>
        </div>

        <div class="input-grupo">
            <i class="fa-solid fa-phone icono"></i>
            <input type="tel" id="telefono" class="texto" name="telefono" placeholder="Teléfono" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-id-card icono"></i>
            <input type="text" id="rut" class="texto" name="rut" placeholder="RUT" required>
        </div>

        <div class="input-grupo">
            <i class="fa-solid fa-envelope icono"></i>
            <input type="email" id="correo" class="texto" name="correo" placeholder="Correo Electrónico" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-lock icono"></i>
            <input type="password" id="clave" class="texto" name="clave" placeholder="Contraseña" required>
        </div>
        
        <div class="input-grupo">
            <i class="fa-solid fa-map-marker-alt icono"></i>
            <input type="text" id="direccion" class="texto" name="direccion" placeholder="Dirección" required>
        </div>
        
        <label for="foto" class="input-grupo input-file-label">
            <i class="fa-solid fa-camera icono"></i>
            <span>Seleccionar Foto</span>
            <input type="file" id="foto" name="foto" accept="image/*" required>
        </label>

        <button class="registrar-veci" type="submit">Registrar</button>
    </form>
</div>

<script src="validador-edad-rut.js"></script>
</body>
</html>