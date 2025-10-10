<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilo-registra-vecino.css">
    <title>Registro Vecino</title>
</head>
<body>


<div class="contenedor">
   
    <form action="../Controlador/Controlador-registro-general.php" method="POST" class="formulario" enctype="multipart/form-data">
     <h2>Registro Vecino</h2> 
        <input type="text" class="texto" placeholder="Primer Nombre:" id="primer_nombre" name="primer_nombre" required>    

        <input type="text" id="segundo_nombre" class="texto" placeholder="Segundo Nombre" name="segundo_nombre" required>    

        <input type="text" id="ape_paterno" placeholder="Apellido Paterno:" name="ape_paterno" required>    

        <input type="text" id="ape_materno" placeholder="Apellido Materno:" name="ape_materno" required>    

        <input type="date" id="fecha_nac" name="fecha_nac" placeholder="Fecha de Nacimiento" required>    

        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>    

        <input type="text" id="rut" name="rut" placeholder="RUT" required>    

        <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>    

        <input type="password" id="clave" name="clave" placeholder="Contraseña" required>    

        <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>    

        <input type="file" id="foto" name="foto" accept="image/*" required>
        <!--<input type="submit" class="Registrar-veci" value="vecino">-->
    <button class="registrar-veci" type="submit">Registrar</button>
</form>

</div>

<script src="validador-edad-rut.js"></script>

</body>
</html>
