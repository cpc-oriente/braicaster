<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Brailler Caster</title>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/297023cb99.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link href="views/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- THEME STYLES -->
    <link href="views/css/cover.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- SCRIPT DEL OBJETO CONVERSOR -->
    <script type="text/javascript" src="views/js/braille_conversor.js"></script>
    <script type="text/javascript" src="views/js/conversor.js"></script>

  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <?php 
        // NAVEGACION >>>>>>>>>>>>
        include "modules/nav.php";
        // VALIDAR MODULO
        if (isset($_GET['page'])) {
          
          // VALIDAR VISTA
          if($_GET['page'] == "contents"){
            
            // MODULO CONTENIDOS
            include "modules/contents.php";

          }else if($_GET['page'] == "contact"){
            
            // MODULO CONTACTO
            include "modules/contact.php";

          }else if($_GET['page'] == "conversor"){
            
            // MODULO CONVERSOR
            include "modules/conversor.php";

          }else {
            
            // MODULO ERROR
            include "modules/error.php";

          }

        }else {
          // MODULO CONVERSOR
          include "modules/conversor.php";

        }
        // FOOTER >>>>>>>>>>>>>>>>
        include "modules/footer.php";
      ?> 
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>
