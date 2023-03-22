<?php 
  /* ================================ */
  /* CONTROLADOR DE VISTAS */
  /* ================================ */
  // Clase >
  require_once "controllers/views.controller.php";
  // Instancia >
  $views = new Template_controller();
  $views->get_views();
?>
