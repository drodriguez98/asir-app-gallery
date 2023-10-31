<!--    Página principal (antes del login)     -->

<!--   http://galeria.local/admin/index.php     -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Galeria de imágenes</title>

        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">
        <link href="/assets/css/estilos.css" rel="stylesheet">

    </head>

    <body>

        <!--    Utilizamos un switch para redirigir a página de login o de registro. El valor se pasa y se recoge por POST.     -->
          
          <?php

            $page = $_GET['page'];

            switch ($page) {

              case 'login':

                #   http://galeria.local/admin/index.php?page=login

                include "includes/login.inc.php";
                break;
              
              case 'new':

                #   http://galeria.local/admin/index.php?page=new

                include "includes/new.inc.php";
                break;

            }            

          ?>
    
        <hr>

        <!-- Footer -->

        <footer>

            <div class="row">

                <div class="col-lg-12">

                    <p></p>

                </div>

            </div>

        </footer>

        <!-- jQuery -->

        <script src="/assets/bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>
