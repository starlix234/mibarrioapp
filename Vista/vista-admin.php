<?php include('../Controlador/controlador-iniciar-admin.php')?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administración</title>
    <link rel="stylesheet" href="../assets/css/estilos-panel.css">
</head>
<body>
  <!-- Botón hamburguesa -->
  <button class="menu-toggle" id="menuToggle">&#9776;</button>
  <div class="overlay" id="overlay"></div>

  <!-- Panel de Administración -->
  <div class="admin-panel">
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
      <h2>Admin</h2>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#" class="active">Usuarios</a></li>
        <li><a href="#">Ideas</a></li>
        <li><a href="#">Configuración</a></li>
        <li><a href="#">Salir</a></li>
      </ul>
    </nav>

    <!-- Contenido principal -->
    <main class="main-content">
      <h1>Panel de Administración</h1>
      <p>Bienvenido al panel de administración. Aquí puedes gestionar usuarios, ideas y la configuración de la plataforma.</p>

      <h2>Usuarios</h2>
      <button id="openModalBtn">Agregar usuario</button>

     <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModalBtn">&times;</span>
     <?php include('vista-agregar-usuarios.php')?>
  </div>
</div>

     <?php include("vista-panel-admin.php")?>
    

    </main>
  </div>

  <!-- Script JS -->
  <script>
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    menuToggle.addEventListener('click', () => {
      const isOpen = sidebar.classList.toggle('open');
      overlay.classList.toggle('active');
      menuToggle.setAttribute('aria-expanded', isOpen);
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('open');
      overlay.classList.remove('active');
    });
  </script>
  <script src="../assets/js/js-Modal.js"></script>
// Obtener elementos del DOM
</body>
</html>
