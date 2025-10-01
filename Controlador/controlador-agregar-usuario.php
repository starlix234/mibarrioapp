<?php require_once('../Modelo/Modelo-conexion.php')?>
<?php include("../Modelo/Modelo-registro.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validar que todos los campos estén presentes
    if (!empty($_POST['primer_nombre']) && !empty($_POST['ape_paterno']) && !empty($_POST['ape_materno']) && !empty($_POST['fecha_nac']) && !empty($_POST['telefono']) && !empty($_POST['clave']) && !empty($_POST['id_rol']) && !empty($_POST['rut']) && !empty($_POST['direccion'])) {
        
        $primer_nombre  = $_POST['primer_nombre'];
        $segundo_nombre = $_POST['segundo_nombre'];
        $ape_paterno    = $_POST['ape_paterno'];
        $ape_materno    = $_POST['ape_materno'];
        $fecha_nac      = $_POST['fecha_nac'];
        $telefono       = $_POST['telefono'];
        $clave          = $_POST['clave'];
        $id_rol         = $_POST['id_rol'];
        $rut            = $_POST['rut'];
        $direccion      = $_POST['direccion'];

        // Aquí llamamos a la función que guarda el usuario
        $resultado = InsertarUsuarioAdmin($conn,$primer_nombre, $segundo_nombre, $ape_paterno, $ape_materno, $fecha_nac, $telefono, $clave, $id_rol, $rut, $direccion);

        if ($resultado) {
            echo "Usuario registrado correctamente.";
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>