<?php
if(!isset($_SESSION)) session_start();
if(isset($_SESSION['id_usuario'])) {
    require_once('../Modelo/Modelo-conexion.php');
    include("../Modelo/Modelo-iniciar-principal.php");
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()) {
        $roles = [1 => 'Administrador', 2 => 'Jefe de Vecinos', 3 => 'Miembro Vecino'];
        $rol_nombre = isset($roles[$row['id_rol']]) ? $roles[$row['id_rol']] : 'Desconocido';
        echo "<div style='text-align:right; margin:10px;'>Sesión iniciada: " . htmlspecialchars($row['primer_nombre'] . ' ' . $row['ape_paterno']) . "<br>Rol: " . $rol_nombre . "</div>";
        
    }
    $stmt->close();
}
?>