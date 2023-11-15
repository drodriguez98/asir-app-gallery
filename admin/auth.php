<!--    Página principal (antes del login)     -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gallery</title>

        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">
        <link href="/assets/css/estilos.css" rel="stylesheet">

    </head>

    <body>
          
        <?php

          $page = $_GET['page'];

          switch ($page) {

            case 'login':

              include "includes/login-include.php";
              break;
            
            case 'new':

              include "includes/new-author-include.php";
              break;

          }            

        ?>
    
        <hr>

        <footer> <div class="row"> <div class="col-lg-12"> <p></p> </div> </div> </footer>

        <script src="/assets/bootstrap/js/jquery.js"></script>

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>