<!--    Home (despues del login)   -->

<!--  http://galeria.local/admin/home.php  -->

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Galería-Home</title>

        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">        
        <link href="/assets/css/estilos.css" rel="stylesheet">

    </head>

    <body>

        <!--    Utilizamos un switch para redirigir a las demás páginas. De nuevo, valor se pasa y se recoge por POST.     --> 

          <?php

            include "includes/menu.php";
            
            $page = $_GET['page'];

            switch ($page) {

              case 'listado':

                #   http://galeria.local/admin/home.php?page=listado

                include "actions/listado.act.php";
                include "includes/listado.inc.php";
                break;

              case 'autores':

                #   http://galeria.local/admin/home.php?page=autores

                include "includes/listado_autores.inc.php";
                break;

              case 'new':

                #   http://galeria.local/admin/home.php?page=new

                include "includes/new_foto.inc.php";
                break;

              case 'edit':

                #   http://galeria.local/admin/home.php?page=edit

                include "includes/edit_foto.inc.php";
                break;
              
              default:

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

        </div>

        <!-- jQuery -->

        <script src="/assets/bootstrap/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>
