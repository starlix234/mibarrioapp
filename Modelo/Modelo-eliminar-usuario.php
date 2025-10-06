
<?php
$eliminarUsuario = $conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");